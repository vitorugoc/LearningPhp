<?php

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

use App\Http\Controllers\PrincipalController;

use App\Http\Controllers\SobreController;

use App\Http\Controllers\ContatoController;

use App\Http\Controllers\TesteController;

use App\Http\Controllers\FornecedorController;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\ClienteController;

use App\Http\Controllers\ProdutoController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index')->middleware('log.acesso');

Route::get('/sobre-nos', [SobreController::class, 'sobre'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/login/{erro?}', [LoginController::class, 'login'])->name('site.login');

Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao:ldap,visitante')->prefix('/app')->group(function () {

    Route::get('/home', [HomeController::class, 'home'])->name('app.home');
    Route::get('/sair', [LoginController::class, 'sair'])->name('app.sair');
    Route::get('/cliente', [ClienteController::class, 'index'])->name('app.cliente');
    Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedor');
    Route::post('/fornecedor/listar', [FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/listar', [FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar', [FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar', [FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::get('/fornecedor/editar/{id}/{msg?}', [FornecedorController::class, 'editar'])->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}', [FornecedorController::class, 'excluir'])->name('app.fornecedor.excluir');
    //Route::get('/produto', [ProdutoController::class, 'index'])->name('app.produto');
    //Route::get('/produto/create', [ProdutoController::class, 'create'])->name('app.produto.create');

    Route::resource('produto', ProdutoController::class);
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');


Route::fallback(function () {
    echo 'rota não existe por favor <a href="' . route("site.index") . '">clique aqui</a> para ser redirecionado';
});
