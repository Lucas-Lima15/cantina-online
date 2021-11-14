<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('cantina.dashboard');
        }

        return redirect()->back()->withInput();
    }

    public function registration() {
        return view('registration');
    }

    public function customRegistration(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('cantina.dashboard');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect()->route('login');
    }
}
