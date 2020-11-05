<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\DisciplinaRequest;
use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function listar()
    {
        $disciplinas = Disciplina::all();

        return view('disciplinas.index', ['disciplinas' => $disciplinas]);    
    }

    public function inserir()
    {
        return view('disciplinas.inserir');    
    }

    public function salvar(DisciplinaRequest $request)
    {
        $dados = $request->all();
        Disciplina::create($dados);

        return redirect('disciplinas');
    }

    public function excluir($id)
    {
        Disciplina::find($id)->delete();

        return redirect('disciplinas');
    }

    public function carregar($id)
    {
        $disciplina = Disciplina::find($id);

        return view('disciplinas.carregar', compact('disciplina'));    
    }

    public function atualizar(DisciplinaRequest $request, $id)
    {
        $disciplina = Disciplina::find($id)->update($request->all());

        return redirect('disciplinas');
    }

}
