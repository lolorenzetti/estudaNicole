<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desenvolvedor extends Model
{
    protected $fillable = ['nome', 'nivel', 'endereco'];

    public $timestamp = true;

    public function projeto(){

        return $this.belongsToMany('App\Projeto');
    }

}
