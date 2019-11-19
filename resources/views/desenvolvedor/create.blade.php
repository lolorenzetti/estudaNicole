@extends('master')
@section('titulo','Novo Cliente')
@section('conteudo')
<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <div class="text-center divmenu">
        <a class="menudados" href="/cliente">Clientes</a>
      <a class="menudados" href="/gerente">Gerentes</a>
      <a class="menudados" href="/desenvolvedor">Desenvolvedores</a>
      <a class="menudados" href="/projeto">Projetos</a>
        </div>
        <h1 styles="align-content:center; margin-bottom: 10px "class="">Novo Desenvolvedor</h1>
        <form class="login100-form validate-form" method="post" action="/desenvolvedor">
        @csrf
        @method("post")
 <div class="col-md-6">
    <div class="form-group" data-validate="nome">
      <label for="">Nome</label>
      <input class="form-control" type="text" name="nome" placeholder="Nome" require>
    </div>    
    <div class="form-group" data-validate="nivel">
    <label for="">Nivel</label>
      <input class="form-control" type="text" name="nivel" placeholder="nivel" require>
    </div>
    <div class="form-group" data-validate="endereco">
    <label for="">Endereco</label>
      <input class="form-control" type="text" name="endereco" placeholder="endereco" require>
    </div>
    <div class="container-login100-form-btn">
      <input class="login100-form-btn" type="submit" value="Enviar">
    </div>
  </form>
  <div class="">
    <a class="" href="JavaScript: window.history.back();">voltar</a>
  </div>
  </div>
@endsection