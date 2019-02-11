<?php

use Illuminate\Database\Seeder;
use App\Professor;
class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professor::create([
            'nome' => 'Carlos',
            'DataNascimento' => '1998-02-02',
            'telefone' => '981551819'         
        ]);
        Professor::create([
            'nome' => 'Eduardo',
            'DataNascimento' => '1998-02-02',
            'telefone' => '981551819'         
        ]);
        Professor::create([
            'nome' => 'Valmir',
            'DataNascimento' => '1998-02-02',
            'telefone' => '981551819'         
        ]);
        Professor::create([
            'nome' => 'José',
            'DataNascimento' => '1998-02-02',
            'telefone' => '981551819'         
        ]);
        Professor::create([
            'nome' => 'Diogo',
            'DataNascimento' => '1998-02-02',
            'telefone' => '981551819'         
        ]);
    }
}
