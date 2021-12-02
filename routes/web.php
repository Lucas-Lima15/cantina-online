<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CantinaController;
use App\Http\Controllers\ResponsavelController;
use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

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
// HomeController
Route::get('/', [HomeController::class,'index'])->name('home');

// AuthController
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.do');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

// CantinaController
Route::get('registration', [CantinaController::class, 'showRegistration'])->name('register.cantina');
Route::post('custom-registration', [CantinaController::class, 'registration'])->name('register.cantina.do');

Route::get('cantina/dashboard', [CantinaController::class, 'showDashboard'])->name('cantina.dashboard');
Route::get('cantina/responsaveis', [CantinaController::class, 'showResponsaveis'])->name('cantina.responsaveis');
Route::get('cantina/alunos', [CantinaController::class, 'showAlunos'])->name('cantina.alunos');

Route::get('cantina/responsaveis/adicionar', [CantinaController::class, 'showAdicionarResponsaveis'])->name('cantina.adicionarResponsaveis');
Route::post('cantina/responsaveis/adicionar', [CantinaController::class, 'adicionarResponsavel'])->name('cantina.adicionarResponsavel.do');
Route::get('cantina/responsaveis/deletar/{id}', [CantinaController::class, 'deletaResponsavel'])->name('cantina.excluirResponsavel.do');
Route::get('cantina/responsaveis/editar/{id}', [CantinaController::class, 'showEditaResponsavel'])->name('cantina.editaResponsavel');
Route::post('cantina/responsaveis/editar/{id}', [CantinaController::class, 'editaResponsavel'])->name('cantina.editaResponsavel.do');

Route::get('cantina/produtos/adicionar', [CantinaController::class, 'showAdicionarProduto'])->name('cantina.adicionarProduto');
Route::post('cantina/produtos/adicionar', [CantinaController::class, 'adicionarProduto'])->name('cantina.adicionarProduto.do');
Route::get('cantina/produtos/deletar/{id}', [CantinaController::class, 'deletaProduto'])->name('cantina.excluirProduto.do');
Route::get('cantina/produtos/editar/{id}', [CantinaController::class, 'showEditaProduto'])->name('cantina.editaProduto');
Route::post('cantina/produtos/editar/{id}', [CantinaController::class, 'editaProduto'])->name('cantina.editaProduto.do');

// ResponsavelController
Route::get('responsavel/dashboard', [ResponsavelController::class, 'showDashboard'])->name('responsavel.dashboard');
Route::get('responsavel/alunos', [ResponsavelController::class, 'showAlunos'])->name('responsavel.alunos');

Route::get('responsavel/alunos/adicionar', [ResponsavelController::class, 'showAdicionarAlunos'])->name('responsavel.AdicionarAluno');
Route::post('responsavel/alunos/adicionar', [ResponsavelController::class, 'adicionarAlunos'])->name('responsavel.AdicionarAluno.do');
Route::get('responsavel/alunos/deletar/{id}', [ResponsavelController::class, 'deletaAluno'])->name('responsavel.excluirAluno.do');
Route::get('responsavel/alunos/editar/{id}', [ResponsavelController::class, 'showEditaAluno'])->name('responsavel.editaAluno');
Route::post('responsavel/alunos/editar/{id}', [ResponsavelController::class, 'editaAluno'])->name('responsavel.editaAluno.do');

Route::get('responsavel/alunos/depositar/{id}', [ResponsavelController::class, 'showDepositaAluno'])->name('responsavel.depositaAluno');
Route::post('responsavel/alunos/depositar/{id}', [ResponsavelController::class, 'depositaAluno'])->name('responsavel.depositaAluno.do');

// AlunoController
Route::get('aluno/dashboard', [AlunoController::class, 'showDashboard'])->name('aluno.dashboard');
Route::get('aluno/comprar/{id}', [AlunoController::class, 'comprar'])->name('aluno.comprar');