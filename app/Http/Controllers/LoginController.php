<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class LoginController extends Controller
{
    public function tela_login(){
        return view('site_frontal.login',  $menu = ['menu' => 5]);
    }

    public function logando(Request $request){
        $request->validate([
            'login' => 'required',
            'senha' => 'required'
        ], [
            'required' => 'O campo :attribute é obrigatório!'
        ]);

        $usuario = Usuario::where('apelido', '=', $request->login)->where('senha', '=', $request->senha)->first();
        
        if ($usuario != null) {
            session([
                'usuario_nome' => $usuario->nome,
                //'usuario_email'=> $usuario->email
                ]);
            return redirect()->route('home_sistema', $menu = ['menu' => 1]);
        }

    }

    public function deslogando(Request $request){
        $request->session()->flush();
        return view('site_frontal.index',  $menu = ['menu' => 1]);
    }


}
