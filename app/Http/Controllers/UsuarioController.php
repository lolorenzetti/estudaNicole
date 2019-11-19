<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Http\Requests\UsuarioRequest;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('usuario.index');
    }
    
    public function create()
    {
        $usuarios = Usuario::all();
        return view ('usuario.create')-> with('usuario',$usuarios);
    }
    public function store(UsuarioRequest $request)
    {
        Usuario::create($request->all());
        return redirect('usuario');
    }
    public function show(UsuarioRequest $request)
    {
        
    }
}
