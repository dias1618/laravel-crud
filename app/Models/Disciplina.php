<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $table = 'disciplina';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['nome'];


    public function alunoDisciplinas()
    {
        return $this->hasMany('App\Models\AlunoDisciplina', 'idDisciplina', 'id');
    }
}
