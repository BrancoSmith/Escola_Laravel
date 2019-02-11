<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable =   ['Turma', 'Ano'];

    public function professor(){
        return $this->belongsToMany('App\Professor')->withTimestamps();
      
    }

    public function aluno(){
        //return $this->belongsToMany('App\aluno', 'professor_aluno', 'aluno_id',  'id');
        return $this->belongsToMany('App\Aluno')->withTimestamps();
        
    }


    
}


