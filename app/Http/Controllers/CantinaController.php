<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CantinaController extends Controller
{

    public function showRegistration() {
        return view('registration');
    }

    public function registration(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => 'cantina'
        ]);

        return redirect()->route('dashboard');
    }

    public function showDashboard() {
        if (Auth::check()) {
            return view('cantina.dashboard');
        }
        return redirect()->route('login');
    }

    public function showResponsaveis() {
        if (Auth::check()) {
            return view('cantina.responsaveis');
        }
        return redirect()->route('login'); 
    }

    public function showAlunos() {
        if (Auth::check()) {
            return view('cantina.alunos');
        }
        return redirect()->route('login');
    }

    public function showAdicionarResponsaveis() {
        if (Auth::check()) {
            return view('cantina.adicionarResponsavel');
        }
        return redirect()->route('login');
    }

    public function adicionarResponsavel(Request $request) {
        dd($request->all());
    }
}
