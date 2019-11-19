@extends('master')
@section('titulo','Clientes')
@section('conteudo')
<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
  @csrf
  <div class="text-center divmenu">
  <a class="menudados" href="/cliente">Clientes</a>
      <a class="menudados" href="/gerente">Gerentes</a>
      <a class="menudados" href="/desenvolvedor">Desenvolvedores</a>
      <a class="menudados" href="/projeto">Projetos</a>
      <a class="menudados" href="/fornecedor">Fornecedores</a>
  </div>

  <div class="text-center cantores">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sigla</th>
      <th scope="col">Nome</th>
      <th scope="col">Acoes</th>
    </tr>
  </thead>
  <tbody>
  @foreach($fornecedores as $f)
    <tr>
      <th scope="row">1</th>
      <td>{{$f->sigla}}</td>
      <td>{{$f->nome}}</td>
      <td><button type="button" class="btn btn-warning"><a href="fornecedor/{{$f->id}}/edit">Editar</a></button> <button styles="margin-left: 10px" type="button" class="btn btn-danger">Excluir</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
  <div class="text-center">
  <button type="button" class="btn btn-dark"><a class="" href="/fornecedor/create">Novo Fornecedor</a></button>
  </div>
</div>

@endsection