@extends('master')
@section('titulo','DashBoard')
@section('conteudo')
<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
<span class="login100-form-title p-b-37">
					Menu
</span>
  @csrf
  <div class="text-center">
      <a class="menudados" href="/cliente">Clientes</a>
      <a class="menudados" href="/gerente">Gerentes</a>
      <a class="menudados" href="/desenvolvedor">Desenvolvedores</a>
      <a class="menudados" href="/projeto">Projetos</a>
        </div>
</div>
@endsection