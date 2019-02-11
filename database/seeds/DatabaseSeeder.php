<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TurmaTableSeeder::class);
        $this->call(ProfessorTableSeeder::class);
        $this->call(AlunoTableSeeder::class);
    }
}
