<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['nome', 'DataNascimento',  'telefone'];

    
    public function turma(){
        return $this->belongsToMany('App\Turma')->withTimestamps();
        
    }

  
}
