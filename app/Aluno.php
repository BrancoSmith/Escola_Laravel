<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'DataNascimento', 'Turma', 'telefone'];

    public function turma(){
        //return $this->belongsToMany('App\Turma', 'professor_turma', 'turma_id',  'id');
        return $this->belongsToMany('App\Turma')->withTimestamps();
    }
}