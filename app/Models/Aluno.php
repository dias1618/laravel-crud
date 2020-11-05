<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'aluno';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['nome'];

    public function curso() {
        return $this->belongsTo(Curso::class, 'idCurso', 'id');
    }

    public function alunoDisciplinas()
    {
        return $this->hasMany('App\Models\AlunoDisciplina', 'idAluno', 'id');
    }

}
