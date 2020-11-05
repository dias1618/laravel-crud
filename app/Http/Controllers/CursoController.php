<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CursoRequest;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Aluno;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function listar()
    {
        $cursos = Curso::all();

        return view('cursos.index', ['cursos' => $cursos]);    
    }

    public function inserir()
    {
        return view('cursos.inserir');    
    }

    public function salvar(CursoRequest $request)
    {
        $dados = $request->all();
        Curso::create($dados);

        return redirect('cursos');
    }

    public function excluir($id)
    {
        Curso::find($id)->delete();

        return redirect('cursos');
    }

    public function carregar($id)
    {
        $curso = Curso::find($id);

        return view('cursos.carregar', compact('curso'));    
    }

    public function atualizar(CursoRequest $request, $id)
    {
        $curso = Curso::find($id)->update($request->all());

        return redirect('cursos');
    }

    public function listarDisciplinas($id)
    {
        $curso = Curso::find($id);

        return view('cursos.disciplinas', compact('curso'));    
    }

    public function excluirDisciplina($id, $idDisciplina){

        $curso = Curso::find($id);

        $curso->disciplinas()->detach($idDisciplina);

        return redirect('cursos/'.$id.'/disciplinas');        
    }

    public function adicionarDisciplina($id){

        $curso = Curso::find($id);
        $disciplinas = Disciplina::all();
        
        return view('cursos.adicionar-disciplina', compact('curso', 'disciplinas'));
    }

    public function salvarDisciplina(CursoRequest $request){

        $data = $request->all();

        $idCurso = $data['idCurso'];
        $idDisciplina = $data['idDisciplina'];
        
        $curso = Curso::find($idCurso);
        $curso->disciplinas()->attach($idDisciplina);

        return redirect('cursos/'.$idCurso.'/disciplinas');        
    }

    public function listarAlunos($id)
    {
        $curso = Curso::find($id);

        return view('cursos.alunos', compact('curso'));    
    }

}
