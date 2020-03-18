<?php

use Illuminate\Database\Seeder;
use App\Vaga;

class TeCriarVagasTrabalhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Vaga::create([
            'emp_cad_id' => 2,
            'cargo' => 'Desenvolvedor',
            'status' => 'Published',
            'descricao' => 'Mais uma vitoria conquistada'
        ]);
        
        
        Vaga::create([
            'emp_cad_id' => 1,
            'cargo' => 'Faxineira',
            'status' => 'Published',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.'
        ]);

        Vaga::create([
            'emp_cad_id' => 1,
            'cargo' => 'Pedreiro',
            'status' => 'Published',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.'
        ]);
    }
}
