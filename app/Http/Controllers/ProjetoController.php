<?php

namespace App\Http\Controllers;

use App\Projeto;
use App\Cliente;
use App\Gerente;
use App\Http\Requests\ProjetoRequest;

class ProjetoController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        $gerentes = Gerente::all();
        return view ('projeto.index')->with('clientes', $clientes)->with('gerentes', $gerentes);
    }

    public function create(){
        $clientes = Cliente::all();
        $gerentes = Gerente::all();
        return view ('projeto.create')->with('clientes', $clientes)->with('gerentes', $gerentes);
    }

    public function store(ProjetoRequest $request){

        Projeto::create($request->all());
        return redirect('projeto');
    }

    public function edit(Projeto $projeto){

        return view('projeto.edit')->with('projeto',$projeto);

    }

    public function update(ProjetoRequest $request, Projeto $projeto){
        $projeto->update($request->all());
        return redirect('projeto');
    }

    public function destroy(Projeto $projeto){
        $projeto->delete();
        return redirect('projeto');
    }
}
