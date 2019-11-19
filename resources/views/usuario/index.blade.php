@extends('master')
@section('titulo','Usuario')
@section('conteudo')
<div class="container-login100" style="background-image: url('/images.jpg');">
<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
<span class="login100-form-title p-b-37">
					Login
				</span>
  <form class="login100-form validate-form" method="post" action="/login">
  @csrf
  <div class="wrap-input100 validate-input m-b-20" data-validate="Digite seu email">
					<input class="input100" type="text" name="email" placeholder="Digite seu email" require>
					<span class="focus-input100"></span>
				</div>
        <div class="wrap-input100 validate-input m-b-25" data-validate = "Digite sua senha">
					<input class="input100" type="password" name="senha" placeholder="Digite sua senha" require>
					<span class="focus-input100"></span>
				</div>
        <div class="container-login100-form-btn">
					<button class="login100-form-btn">
            Login
          </button>
				</div>
  </form>
  <div class="text-center">
					<a href="/usuario/create" class="txt2 hov1">
          Cadastrar-se
        </a>
				</div>
</div>
@endsection