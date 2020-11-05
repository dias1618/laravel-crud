<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoDisciplina extends Model
{
    use HasFactory;

    protected $table = 'aluno_disciplina';

    protected $fillable = ['semestre', 'situacao'];

    public $timestamps = false;

    public function aluno() {
        return $this->belongsTo(Aluno::class, 'idAluno', 'id');
    }

    public function disciplina() {
        return $this->belongsTo(Disciplina::class, 'idDisciplina', 'id');
    }
}
