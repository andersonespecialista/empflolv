<?php

use Illuminate\Database\Seeder;

class Testes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TeCriarEmpCadSeeder::class);
        $this->call(TeCriarVagasTrabalhoSeeder::class);
    }
}
