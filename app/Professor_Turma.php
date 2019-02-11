<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor_Turma extends Model
{

    
    public function turma(){
        return $this->belongsToMany('App\Turma', 'id', 'turma_id');
        
    }

    public function professor(){
        return $this->belongsToMany('App\Professor', 'id', 'professor_id');
      
    }
       
}
