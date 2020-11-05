<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\AlunoDisciplina;
use App\Http\Requests\AlunoRequest;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar()
    {
        $alunos = Aluno::all();

        return view('alunos.index', ['alunos' => $alunos]);    
    }

    public function inserir()
    {
        $cursos = Curso::all();

        return view('alunos.inserir', compact('cursos'));    
    }

    public function salvar(AlunoRequest $request)
    {
        $dados = $request->all();
        $aluno = Aluno::create($dados);
        $curso = Curso::find($dados['idCurso']);
        $aluno->curso()->associate($curso);
        $aluno->save();
        return redirect('alunos');
    }

    public function excluir($id)
    {
        Aluno::find($id)->delete();

        return redirect('alunos');
    }

    public function atualizar(AlunoRequest $request, $id)
    {
        $aluno = Aluno::find($id)->update($request->all());

        return redirect('alunos');
    }


    public function listarDisciplinas($id)
    {
        $aluno = Aluno::find($id);

        return view('alunos.disciplinas', compact('aluno'));    
    }


    public function excluirDisciplina($id, $idDisciplina){

        $aluno = Aluno::find($id);

        $aluno->alunoDisciplinas()->where('idDisciplina', '=', $idDisciplina)->where('idAluno', '=', $id)->delete();

        return redirect('alunos/'.$id.'/disciplinas');        
    }

    public function adicionarDisciplina($id){

        $aluno = Aluno::find($id);
        $disciplinas = Disciplina::all();
        $situacoes = array(
            0 => 'Em Curso',
            1 => 'Aprovado',
            2 => 'Reprovado',
            3 => 'Trancado'
        );

        return view('alunos.adicionar-disciplina', compact('aluno', 'disciplinas', 'situacoes'));
    }

    public function salvarDisciplina(AlunoRequest $request){

        $data = $request->all();
        $aluno = Aluno::find($data['idAluno']);
        $disciplina = Disciplina::find($data['idDisciplina']);
        $alunoDisciplina = AlunoDisciplina::make($data);
        $alunoDisciplina->aluno()->associate($aluno);
        $alunoDisciplina->disciplina()->associate($disciplina);
        $alunoDisciplina->save();
        return view('alunos.disciplinas', compact('aluno'));         
    }


}
