<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=['sigla', 'nome', 'endereco', 'fornecedor_id'];
    public $timestamp = true;

    public function projetos(){

        return $this.hasMany('App\Projeto');
        
    }

    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');

    }
}
