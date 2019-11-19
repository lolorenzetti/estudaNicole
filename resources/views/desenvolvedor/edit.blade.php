@extends('master')
@section('titulo','Editar Desenvolvedor')
@section('conteudo')
<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <div class="text-center divmenu">
        <a class="menudados" href="/cliente">Clientes</a>
      <a class="menudados" href="/gerente">Gerentes</a>
      <a class="menudados" href="/desenvolvedor">Desenvolvedores</a>
      <a class="menudados" href="/projeto">Projetos</a>
        </div>
        <H1 class="centerspan">Editar Desenvolvedor</H1>
        <form class="login100-form validate-form" method="post" action="/desenvolvedor/{{$desenvolvedor->id}}">
        @csrf
    @method("put")
<div class="col-md-6">
  <div class="form-group" data-validate="Nome">
  <label for="">Nome</label>
    <input class="form-control" type="text" name="nome" placeholder="Nome" value="{{$desenvolvedor->nome}}" require>
  </div>
    <div class="form-group" data-validate="Nivel">
      <label for="">Nivel</label>
      <input class="form-control" type="text" name="nivel" placeholder="nivel" value="{{$desenvolvedor->nivel}}" require>
    </div>
    <div class="form-group" data-validate="endereco">
    <label for="">Endereco</label>
      <input class="form-control" type="text" name="endereco" placeholder="endereco" value="{{$desenvolvedor->endereco}}" require>
    </div>
    <div class="container-login100-form-btn">
      <input class="login100-form-btn" type="submit" value="Enviar">
    </div>
  </form>
  <div class="text-center">
    <a class="txt2 hov1" href="JavaScript: window.history.back();">voltar</a>
  </div>
  </div>
@endsection