<?php

namespace App\Http\Controllers;

use App\Desenvolvedor;
use App\Http\Requests\DesenvolvedorRequest;

class DesenvolvedorController extends Controller
{
    public function index(){
        $desenvolvedores = Desenvolvedor::all();

        return view('desenvolvedor.index')->with('desenvolvedores', $desenvolvedores);
    }

    public function create(){
        return view ('desenvolvedor.create');
    }

    public function store(DesenvolvedorRequest $request){

        Desenvolvedor::create($request->all());
        return redirect('desenvolvedor');
    }

    public function edit(Desenvolvedor $desenvolvedor){

        return view('desenvolvedor.edit')->with('desenvolvedor',$desenvolvedor);

    }

    public function update(DesenvolvedorRequest $request, Desenvolvedor $desenvolvedor){
        $desenvolvedor->update($request->all());
        return redirect('desenvolvedor');
    }

    public function destroy(Desenvolvedor $desenvolvedor){
        $desenvolvedor->delete();
        return redirect('desenvolvedor');
    }
}
