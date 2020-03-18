<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Emp_cad;

class Vaga extends Model
{
    protected $table = 'vagas';
    protected $fillable = [
        'nome',
        'emp_cad_id',
        'cargo',
        'descricao',
        'status'
    ];

    /**
     * Relacionamento One To Many
     */
    public function emp_cad ()
    {
        return $this->belongsTo('App\Emp_cad');
    }
}
