<?php

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
    return view('site_frontal.index', $menu = ['menu' => 1]);
})->name("home");

Route::get('/sobre', function () {
    return view('site_frontal.sobre', $menu = ['menu' => 2]);
})->name("sobre");

Route::get('/area', function () {
    return view('site_frontal.area', $menu = ['menu' => 3]);
})->name("area");

Route::get('/contato', function () {
    return view('site_frontal.contato', $menu = ['menu' => 4]);
})->name("contato");

Route::get('/index_sistema', function () {
    if (session('usuario_nome')) {
        return view('pag_principal', $menu = ['menu' => 1]);
    }else{
        return redirect()->route('home', $menu = ['menu' => 1]);
    }
})->name("home_sistema");

Route::group(['prefix' => '/login/'], function () {
    
    Route::get('login', 'LoginController@tela_login')->name("login");
    Route::post('logando', 'LoginController@logando')->name("logando");
    Route::get('logout', 'LoginController@deslogando')->name("deslogando");
    
});

Route::group(['prefix' => '/cadastro/'], function () {
    
    Route::get('usuario', 'UsuarioController@cadastrar')->name("usuario.cadastrar");
    Route::post('novo_usuario', 'UsuarioController@novo_usuario')->name("usuario.novo");
    Route::post('novo_cliente', 'UsuarioController@novo_cliente')->name("cliente.novo");
    
});

Route::group(['prefix' => '/processo/'], function () {
    
    Route::get('cadastrar', 'ProcessoController@cadastrar')->name("processo.cadastrar");
    Route::post('novo_processo', 'ProcessoController@novo_processo')->name("processo.novo");
    Route::get('pesquisa_processo', 'ProcessoController@pesquisa_processo')->name("processo.pesquisa");
    Route::post('alterar_processo', 'ProcessoController@alterar_processo')->name("processo.alterar");
    
});

Route::group(['prefix' => '/agendamento/'], function () {
    
    Route::get('cadastrar', 'AgendamentoController@cadastrar')->name("agendamento.cadastrar");
    Route::post('novo_agendamento', 'AgendamentoController@novo_agendamento')->name("agendamento.novo");
    Route::get('pesquisar_agendamento', 'AgendamentoController@pesquisar_agendamento')->name("agendamento.pesquisa");
    Route::post('alterar_agendamento', 'AgendamentoController@alterar_agendamento')->name("agendamento.alterar");
    
    
});

