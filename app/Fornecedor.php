<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable=['sigla', 'nome'];
    public $timestamp = true;

    public function clientes(){

        return $this->hasMany('App\Cliente');
        
    }
}
