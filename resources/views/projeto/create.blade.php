@extends('master')
@section('titulo','Novo Projeto')
@section('conteudo')
<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <div class="text-center divmenu">
        <a class="menudados" href="/cliente">Clientes</a>
      <a class="menudados" href="/gerente">Gerentes</a>
      <a class="menudados" href="/desenvolvedor">Desenvolvedores</a>
      <a class="menudados" href="/projeto">Projetos</a>
        </div>
        <h1 styles="align-content:center; margin-bottom: 10px "class="">Novo Projeto</h1>
        <form class="login100-form validate-form" method="post" action="/projeto">
        @csrf
        @method("post")
 <div class="col-md-6">
    <div class="form-group" data-validate="sigla">
      <label for="">Sigla</label>
      <input class="form-control" type="text" name="sigla" placeholder="Sigla" require>
    </div>    
    <div class="form-group" data-validate="nivel">
    <label for="">Nome</label>
      <input class="form-control" type="text" name="nome" placeholder="Nome do projeto" require>
    </div>
    <div class="form-group" data-validate="endereco">
    <label for="">Descricao</label>
      <input class="form-control" type="text" name="descricao" placeholder="Descricao do projeto" require>
    </div>
    <div class="form-group" data-validate="endereco">
    <label for="">Valor</label>
      <input class="form-control" type="text" name="valor" placeholder="Valor do projeto" require>
    </div>
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Cliente</label>
      <select class="custom-select mr-sm-2" name="cliente_id">
        @foreach($clientes as $c)
        <option value="{{$c->id}}">{{$c->nome}}</option>
        @endforeach
      </select>
    </div>  
    <div class="col-auto my-1">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Cliente</label>
      <select class="custom-select mr-sm-2" name="gerente_id">
        @foreach($gerentes as $g)
        <option value="{{$g->id}}">{{$g->nome}}</option>
        @endforeach
      </select>
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