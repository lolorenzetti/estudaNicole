<?php

namespace App\Http\Controllers;

use App\Gerente;
use App\Http\Requests\GerenteRequest;

class GerenteController extends Controller
{
    public function index(){
        $gerentes = Gerente::all();

        return view('gerente.index')->with('gerentes', $gerentes);
    }

    public function create(){
        return view ('gerente.create');
    }

    public function store(GerenteRequest $request){

        Gerente::create($request->all());
        return redirect('gerente');
        
    }

    public function edit(Gerente $gerente){

        return view('gerente.edit')->with('gerente',$gerente);

    }

    public function update(GerenteRequest $request, Gerente $gerente){
        $gerente->update($request->all());
        return redirect('gerente');
    }

    public function destroy(Gerente $gerente){
        $gerente->delete();
        return redirect('gerente');
    }
}
