<?php

use Illuminate\Database\Seeder;
use App\Emp_cad;

class TeCriarEmpCadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Emp_cad::create([
            'nome' => 'Andrin Software',
            'user_id' => 2,
            'doc' => 1234123412345,
            'email' => 'andrin@andrin.com'
        ]);
        
        Emp_cad::create([
            'nome' => 'Luar Coworking',
            'user_id' => 1,
            'doc' => 98765432166666,
            'email' => 'barros2100@hotmail.com'
        ]);

        
    }
}
