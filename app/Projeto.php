<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['sigla', 'nome', 'descricao', 'valor', 'cliente_id', 'gerente_id'];
    public $timestamp = true;


    public function cliente(){

        return $this.belongsTo('App\Cliente');
        
    }

    public function gerente(){

        return $this.belongsTo('App\Gerente');

    }

    public function desenvolvedor(){

        return $this.belongsToMany('App\Desenvolvedor');

    }
}
