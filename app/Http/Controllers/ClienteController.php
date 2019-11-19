<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Fornecedor;

use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    public function index(){
        $fornecedores = Fornecedor::all();
        $clientes = Cliente::all();
        
        return view('cliente.index')->with('clientes', $clientes)->with('fornecedores', $fornecedores);
    }

    public function create(){

        $fornecedores = Fornecedor::all();
        return view('cliente.create')->with('fornecedores', $fornecedores);
    }

    public function store(ClienteRequest $request){
        
        Cliente::create($request->all());
        return redirect('cliente');
    }

    public function edit(Cliente $cliente){

        $fornecedores = Fornecedor::all();

        return view('cliente.edit')->with('cliente',$cliente)->with('fornecedores', $fornecedores);

    }

    public function update(ClienteRequest $request, Cliente $cliente){
        $cliente->update($request->all());
        return redirect('cliente');
    }

    public function destroy(Cliente $cliente){
        $cliente->delete();
        return redirect('cliente');
    }
}
