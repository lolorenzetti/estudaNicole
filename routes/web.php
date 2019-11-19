<?php
use App\Usuario;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('usuario.index');
});

Route::resource('cliente','ClienteController');
Route::resource('gerente','GerenteController');
Route::resource('desenvolvedor','DesenvolvedorController');
Route::resource('projeto','ProjetoController');
Route::resource('usuario','UsuarioController');
Route::resource('fornecedor','FornecedorController');


Route::post('/login',function(){
    $user = Usuario::where('email', '=', $_POST['email'])->get();
    try {
        $teste = $user[0]->id;
        if($user[0]->senha ==  $_POST['senha']){
            $_COOKIE['usuario'] = $user;
            return view('usuario.dash')-> with('user',$user); 
        }
        else{
            echo("Senha Incorreta!");
            return view('usuario.index');
        }
    } catch (Exception $e) {
        echo("Erro ao fazer login! Verifique E-mail e Senha!");
        return view('usuario');
    }
    });
    Route::get('/usuario/dash',function(){
        $user = $_COOKIE['usuario'];
        return view('usuario.dash')-> with('user',$user); 
        
    });