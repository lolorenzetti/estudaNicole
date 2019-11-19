@extends('master')
@section('titulo','Novo Usuário')
@section('conteudo')
<div class="container-login100">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
<span class="login100-form-title p-b-37">
					Cadastrar
				</span>
  <form class="login100-form validate-form" method="post" action="/usuario">
  @csrf
  <div class="wrap-input100 validate-input m-b-20" data-validate="Digite seu nome">
					<input class="input100" type="text" name="nome" placeholder="Digite seu nome" require>
					<span class="focus-input100"></span>
				</div>
  <div class="wrap-input100 validate-input m-b-20" data-validate="Digite seu email">
					<input class="input100" type="text" name="email" placeholder="Digite seu email" require>
					<span class="focus-input100"></span>
				</div>
        <div class="wrap-input100 validate-input m-b-25" data-validate = "Digite sua senha">
					<input class="input100" type="password" name="senha" placeholder="Digite sua senha" require>
					<span class="focus-input100"></span>
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
