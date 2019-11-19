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
        <h1 styles="align-content:center; margin-bottom: 10px "class="">Novo Cliente</h1>
        <form class="login100-form validate-form" method="post" action="/cliente">
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
    <div class="form-group" data-validate="endereco">
    <label for="">Endereco</label>
      <input class="form-control" type="text" name="endereco" placeholder="endereco" require>
    </div>
    <div class="col-auto my-1 form-group">
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Cliente</label>
      <select class="custom-select mr-sm-2" name="fornecedor_id">
        @foreach($fornecedores as $f)
        <option value="{{$f->id}}">{{$f->nome}}</option>
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