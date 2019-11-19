<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gerente extends Model
{
    protected $fillable = ['nome', 'especialidade', 'endereco'];
    public $timestamp = true;


    public function projeto(){

        return $this.hasMany('App/Projeto');

    }
}
