<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = Fornecedor::all();

        return view('fornecedor.index')->with('fornecedores', $fornecedores);
    }

    public function create(){

        return view('fornecedor.create');
    }

    public function store(Request $request){
        
        Fornecedor::create($request->all());
        return redirect('fornecedor');
    }

    public function edit(Fornecedor $fornecedor){

        return view('fornecedor.edit')->with('fornecedor',$fornecedor);

    }

    public function update(Request $request, Fornecedor $fornecedor){
        $fornecedor->update($request->all());
        return redirect('fornecedor');
    }

    public function destroy(Fornecedor $fornecedor){
        $fornecedor->delete();
        return redirect('fornecedor');
    }
}
