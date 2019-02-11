<?php

use Illuminate\Database\Seeder;
use App\Aluno;
class AlunoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno::create([
            'nome' => 'Carlos',
            'DataNascimento' => '1998-02-02',
            'telefone' => '95878-8548'         
        ]);
        Aluno::create([
            'nome' => 'Eduardo',
            'DataNascimento' => '1998-02-02',
            'telefone' => '952365458'         
        ]);
        Aluno::create([
            'nome' => 'Valmir',
            'DataNascimento' => '1998-02-02',
            'telefone' => '985695425'         
        ]);
        Aluno::create([
            'nome' => 'José',
            'DataNascimento' => '1998-02-02',
            'telefone' => '956874587'         
        ]);
        Aluno::create([
            'nome' => 'Diogo',
            'DataNascimento' => '1998-02-02',
            'telefone' => '9545632545'         
        ]);
    }
}
