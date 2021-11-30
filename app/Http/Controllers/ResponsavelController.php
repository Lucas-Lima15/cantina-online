<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ResponsavelController extends Controller
{
    public function showDashboard()
    {
        if (Auth::check()) {
            $users = Aluno::where('responsavel_id', Auth::user()->id)->get();

            return view('responsavel.dashboard', compact('users'));
        }

        return redirect()->route('login');
    }

    public function showAlunos()
    {
        if (Auth::check()) {
            // $users = User::where('tipo', 'aluno')->get();

            // $user = User::findOrFail(25);
            // $user = User::where('tipo', 'aluno')->get();
            // $user = User::with('aluno')->where('tipo', 'aluno')->get();
            $users = Aluno::where('responsavel_id', Auth::user()->id)->get();

            return view('responsavel.alunos', compact('users'));
        }

        return redirect()->route('login');
    }

    public function showAdicionarAlunos() {
        if (Auth::check()) {
            return view('responsavel.adicionarAluno');
        }

        return redirect()->route('login');
    }

    public function adicionarAlunos(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => 'aluno'
        ]);

        $user->aluno()->create([
            'matricula' => $request->matricula,
            'turno' => $request->turno,
            'telefone' => $request->telefone,
            'turma' => $request->turma,
            'responsavel_id' => Auth::user()->id,
            'saldo' => 0.00
        ]);

        return redirect()->route('responsavel.alunos');
    }

    public function deletaAluno($id)
    {
        $user = User::findOrFail($id);
        $user->aluno()->delete();
        $user->delete();

        return redirect()->route('responsavel.alunos');
    }

    public function showEditaAluno($id) 
    {
        if (Auth::check()) {
            $user = User::findOrFail($id);
            return view('responsavel.editarAluno', compact('user'));
        }

        return redirect()->route('login');
    }

    public function editaAluno(Request $request, $id) 
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        $user->aluno()->update([
            'matricula' => $request->matricula,
            'turno' => $request->turno,
            'telefone' => $request->telefone,
            'turma' => $request->turma,
        ]);

        return redirect()->route('responsavel.alunos');
    }

    public function showDepositaAluno($id)
    {
        if (Auth::check()) {
            $user = User::findOrFail($id);
            return view('responsavel.depositarAluno', compact('user'));
        }

        return redirect()->route('login');
    }

    public function depositaAluno(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $deposito = $request->deposito;
        $saldo = $user->aluno()->first()->saldo + $deposito;
        
        $user->aluno()->update([
            'saldo' => $saldo
        ]);

        return redirect()->route('responsavel.dashboard');
    }
}
