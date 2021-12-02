<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlunoController extends Controller
{
    public function showDashboard()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $produtos = Produto::all();

            return view('aluno.dashboard', compact('user', 'produtos'));
        }

        return redirect()->route('login');
    }

    public function comprar($id)
    {
        $produto = Produto::findOrFail($id);
        $user = Auth::user();

        $saldo = $user->aluno()->first()->saldo - $produto->preco;

        if ($saldo > 0) {
            $user->aluno()->update([
                'saldo' => $saldo
            ]);
            
            return redirect()->route('aluno.dashboard');
        }

        return "Saldo insuficiente";
    }
}
