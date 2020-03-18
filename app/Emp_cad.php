<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Vaga;

class Emp_cad extends Model
{
    protected $table = 'emp_cad';
    protected $fillable = [
        'user_id',
        'doc',
        'email'
    ];

    /**
     * relacionamento One To Many
     */
    public function vaga ()
    {
        return $this->hasMany('App\Vaga', 'emp_cad_id');
    }
}
