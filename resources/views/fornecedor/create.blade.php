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
      <a class="menudados" href="/fornecedor">Fornecedores</a>
        </div>
        <h1 styles="align-content:center; margin-bottom: 10px "class="">Novo Fornecedor</h1>
        <form class="login100-form validate-form" method="post" action="/fornecedor">
        @csrf
        @method("post")
 <div styles="text-align: center">
    <div class="form-group" data-validate="sigla">
      <label for="">Sigla</label>
      <input class="form-control" type="text" name="sigla" placeholder="sigla" require>
    </div>    
    <div class="form-group" data-validate="nome">
    <label for="">Nome</label>
      <input class="form-control" type="text" name="nome" placeholder="nome" require>
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