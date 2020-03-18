<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vaga;
use App\Emp_cad;

class VagasController extends Controller
{   
    public function __construct ()
    {
        //$this->middelware('auth');
    }

    public function VagasPublished ()
    {
        $vagas = Vaga::where('status', 'Published')->get();
        
        /**
         * Obtem apenas o valor de emp_cad_id e insere no array emp_cad_id_array
         */
        $emp_cad_id_array = [];
        foreach ($vagas as $vaga)
        {   
            array_push($emp_cad_id_array, $vaga->emp_cad_id);
        }

        /**
         * remove as duplicatas do array
         */
        $emp_cad_id_array = array_unique($emp_cad_id_array, SORT_REGULAR);
        
        // Busca as empresas
        $emp_cads = Emp_cad::find($emp_cad_id_array);
        
        // Alimenta vaga com o nome da empresa 
        foreach ($vagas as $vaga)
        {   
            foreach ($emp_cads as $emp_cad)
            {
                if($vaga->emp_cad_id == $emp_cad->id)
                {
                    $vaga->nome_empresa = $emp_cad->nome;
                }
            }
        }
        

        return view('site.start.content.vagas')->with('vagas', $vagas);
    }
}
