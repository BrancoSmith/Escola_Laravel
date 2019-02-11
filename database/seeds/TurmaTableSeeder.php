<?php

use Illuminate\Database\Seeder;
use App\Turma;
class TurmaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Turma::create([
            'Turma' => 'Ciência',
            'Ano' => '1998',
            
        ]);
        Turma::create([
            'Turma' => 'Português',
            'Ano' => '1998',
            
        ]);
        Turma::create([
            'Turma' => 'Biologia',
            'Ano' => '1998',
            
        ]);
        Turma::create([
            'Turma' => 'Matemática',
            'Ano' => '1998',
            
        ]);
    }
}
