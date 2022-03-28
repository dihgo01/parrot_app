<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

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
//Language Translation

Route::get('/', [App\Http\Controllers\AuthController::class, 'root'])->name('root');
Route::get('/auth-login', [App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::get('/auth-cadastro', [App\Http\Controllers\AuthController::class, 'showRegister'])->name('register');

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login_auth');
Route::post('/usuarios', [App\Http\Controllers\UsuariosController::class, 'store'])->name('register-auth');
// ROUTES SESSÃO

Route::group([

    'middleware' => ['auth'],

], function () {
    //Route::get('{any}', [App\Http\Controllers\AuthController::class, 'index'])->name('index');
    // Route::get('{any}', [App\Http\Controllers\RouteController::class, 'index'])->name('index');

    //ROUTES VIEWS
    //Route::get('{any}', [App\Http\Controllers\AuthController::class, 'index'])->name('index');
    Route::get('/dashboard', [App\Http\Controllers\AuthController::class, 'showDashboard'])->name('dashboard');

    Route::get('/tickets', [App\Http\Controllers\RouteController::class, 'tickets'])->name('tickets');
    Route::get('/tickets-cadastro', [App\Http\Controllers\RouteController::class, 'ticketsCadastro']);

    Route::get('/categorias', [App\Http\Controllers\RouteController::class, 'categorias']);
    Route::get('/categorias-cadastro', [App\Http\Controllers\RouteController::class, 'categoriasCadastro']);

    Route::get('/prioridades', [App\Http\Controllers\RouteController::class, 'prioridades']);
    Route::get('/prioridades-cadastro', [App\Http\Controllers\RouteController::class, 'prioridadesCadastro']);

    Route::get('/pesquisa-satisfacao', [App\Http\Controllers\RouteController::class, 'pesquisaSatisfacao']);


    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    // ROUTES USUARIOS
    Route::get('/usuarios-db', [App\Http\Controllers\UsuariosController::class, 'index']);
    Route::put('/usuarios-db/{id}', [App\Http\Controllers\UsuariosController::class, 'update']);
    Route::put('/usuarios-delete/{id}', [App\Http\Controllers\UsuariosController::class, 'destroy']);

    // ROUTES PRIORIDADES
    Route::get('/prioridades-db', [App\Http\Controllers\PrioridadesController::class, 'index']);
    Route::get('/prioridades-search/{id}', [App\Http\Controllers\PrioridadesController::class, 'search']);
    Route::post('/prioridades-db', [App\Http\Controllers\PrioridadesController::class, 'store']);
    Route::put('/prioridades-db/{id}', [App\Http\Controllers\PrioridadesController::class, 'update']);
    Route::put('/prioridades-delete/{id}', [App\Http\Controllers\PrioridadesController::class, 'destroy']);

    // ROUTES CATEGORIAS
    Route::get('/categorias-db', [App\Http\Controllers\CategoriasController::class, 'index']);
    Route::post('/categorias-db', [App\Http\Controllers\CategoriasController::class, 'store']);
    Route::put('/categorias-db/{id}', [App\Http\Controllers\CategoriasController::class, 'update']);
    Route::put('/categorias-delete/{id}', [App\Http\Controllers\CategoriasController::class, 'destroy']);

    // ROUTES TICKETS
    Route::get('/tickets-db', [App\Http\Controllers\TicketsController::class, 'index']);
    Route::post('/tickets-db', [App\Http\Controllers\TicketsController::class, 'store'])->name('create-ticket');
    Route::put('/tickets-db/{id}', [App\Http\Controllers\TicketsController::class, 'update']);
    Route::put('/tickets-delete/{id}', [App\Http\Controllers\TicketsController::class, 'destroy']);

    // ROUTES ARQUIVOS
    Route::post('/files', [App\Http\Controllers\UploadController::class, 'upload']);
});
