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
            $users = User::where('tipo', 'responsavel')->get();
            return view('cantina.responsaveis', compact('users'));
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => 'responsavel'
        ]);

        $user->responsavel()->create($request->all());

        return redirect()->route('cantina.responsaveis');
    }

    public function deletaResponsavel($id) {
        $user = User::findOrFail($id);
        $user->responsavel()->delete();
        $user->delete();

        return redirect()->route('cantina.responsaveis');
    }

    public function showEditaResponsavel($id) {
        $user = User::findOrFail($id);
        return view('cantina.editarResponsavel', compact('user'));
    }

    public function editaResponsavel(Request $request, $id) {
        $user = User::findOrFail($id);
        // dd($request->except('_token'));
        $user->update($request->all());
        $user->responsavel()->update([
            'cpf' => $request->cpf,
            'telefone' => $request->telefone
        ]);

        return redirect()->route('cantina.responsaveis');
    }
}
