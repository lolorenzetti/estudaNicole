@extends('master')
@section('titulo','Editar CLiente')
@section('conteudo')
<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <div class="text-center divmenu">
        <a class="menudados" href="/cliente">Clientes</a>
      <a class="menudados" href="/gerente">Gerentes</a>
      <a class="menudados" href="/desenvolvedor">Desenvolvedores</a>
      <a class="menudados" href="/projeto">Projetos</a>
        </div>
        <h1 class="centerspan">Editar Projeto</h1>
        <form class="login100-form validate-form" method="post" action="/projeto/{{$projeto->id}}">
        @csrf
    @method("put")
<div class="col-md-6">
    <div class="form-group" data-validate="sigla">
    <label for="">Sigla</label>
      <input class="form-control" type="text" name="sigla" placeholder="Sigla do projetlo" value="{{$projeto->sigla}}" require>
    </div>
    <div class="form-group" data-validate="Nome">
          <label for="">Especialidade</label>
      <input class="form-control" type="text" name="especialidade" placeholder="Nome do projeto" value="{{$projeto->nome}}" require>
    </div>
    <div class="form-group" data-validate="endereco">
      <label for="">Endereco</label>
      <input class="form-control" type="text" name="endereco" placeholder="endereco" value="{{$gerente->endereco}}" require>
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