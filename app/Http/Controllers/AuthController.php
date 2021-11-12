<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /* 
    Verifica se o usuário está logado e redireciona para 
    o dashboard caso não esteja redireciona para a tela de 
    login
    */
    public function dashboard() {
        if (Auth::check()) {
            return view('cantina.dashboard');
        }
        
        return redirect()->route('login');
    }

    /*
    Retorna a view login
    */
    public function showLogin() {
        return view('login');
    }

    /*
    Realiza o login verificando se o email e password
    permitem
    */
    public function login(Request $request) {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect()-route('cantina.dashboard');
        }

        return redirect()->back()->withInput();
    }
}
