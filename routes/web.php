<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'cursos'], function () {
    Route::get('', [CursoController::class, 'listar']);
    Route::get('inserir', [CursoController::class, 'inserir']);
    Route::post('salvar', [CursoController::class, 'salvar']);
    Route::post('{id}/atualizar', [CursoController::class, 'atualizar']);
    Route::get('{id}/excluir', [CursoController::class, 'excluir']);
    Route::get('{id}/carregar', [CursoController::class, 'carregar']);
    Route::get('{id}/disciplinas', [CursoController::class, 'listarDisciplinas']);
    Route::get('{id}/disciplinas/{idDisciplina}/excluir', [CursoController::class, 'excluirDisciplina']);
    Route::get('{id}/disciplinas/adicionar', [CursoController::class, 'adicionarDisciplina']);
    Route::post('{id}/disciplinas/salvarDisciplina', [CursoController::class, 'salvarDisciplina']);
    Route::get('{id}/alunos', [CursoController::class, 'listarAlunos']);
});

Route::group(['prefix' => 'disciplinas'], function () {
    Route::get('', [DisciplinaController::class, 'listar']);
    Route::get('inserir', [DisciplinaController::class, 'inserir']);
    Route::post('salvar', [DisciplinaController::class, 'salvar']);
    Route::post('{id}/atualizar', [DisciplinaController::class, 'atualizar']);
    Route::get('{id}/excluir', [DisciplinaController::class, 'excluir']);
    Route::get('{id}/carregar', [DisciplinaController::class, 'carregar']);
});

Route::group(['prefix' => 'alunos'], function () {
    Route::get('', [AlunoController::class, 'listar']);
    Route::get('inserir', [AlunoController::class, 'inserir']);
    Route::post('salvar', [AlunoController::class, 'salvar']);
    Route::get('{id}/excluir', [AlunoController::class, 'excluir']);
    Route::get('{id}/carregar', [AlunoController::class, 'carregar']);
    Route::get('{id}/disciplinas', [AlunoController::class, 'listarDisciplinas']);
    Route::get('{id}/disciplinas/{idDisciplina}/excluir', [AlunoController::class, 'excluirDisciplina']);
    Route::get('{id}/disciplinas/adicionar', [AlunoController::class, 'adicionarDisciplina']);
    Route::post('{id}/disciplinas/salvarDisciplina', [AlunoController::class, 'salvarDisciplina']);
});
