<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'curso';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['nome'];

    public function disciplinas()
    {
        return $this->belongsToMany('App\Models\Disciplina', 'curso_disciplina', 'idCurso', 'idDisciplina');
    }

    public function alunos()
    {
        return $this->hasMany('App\Models\Aluno', 'idCurso', 'id');
    }
}
