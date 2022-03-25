<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// ROUTES SESSÃO
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/usuarios', [App\Http\Controllers\UsuariosController::class, 'store']);

Route::group([

    'middleware' => ['AuthRoutes'],

], function () {

    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);

    // ROUTES USUARIOS
    Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index']);
    Route::put('/usuarios/{id}', [App\Http\Controllers\UsuariosController::class, 'update']);
    Route::put('/usuarios-delete/{id}', [App\Http\Controllers\UsuariosController::class, 'destroy']);

    // ROUTES PRIORIDADES
    Route::get('/prioridades', [App\Http\Controllers\PrioridadesController::class, 'index']);
    Route::get('/prioridades-search/{id}', [App\Http\Controllers\PrioridadesController::class, 'search']);
    Route::post('/prioridades', [App\Http\Controllers\PrioridadesController::class, 'store']);
    Route::put('/prioridades/{id}', [App\Http\Controllers\PrioridadesController::class, 'update']);
    Route::put('/prioridades-delete/{id}', [App\Http\Controllers\PrioridadesController::class, 'destroy']);

    // ROUTES CATEGORIAS
    Route::get('/categorias', [App\Http\Controllers\CategoriasController::class, 'index']);
    Route::post('/categorias', [App\Http\Controllers\CategoriasController::class, 'store']);
    Route::put('/categorias/{id}', [App\Http\Controllers\CategoriasController::class, 'update']);
    Route::put('/categorias-delete/{id}', [App\Http\Controllers\CategoriasController::class, 'destroy']);

    // ROUTES TICKETS
    Route::get('/tickets', [App\Http\Controllers\TicketsController::class, 'index']);
    Route::post('/tickets', [App\Http\Controllers\TicketsController::class, 'store']);
    Route::put('/tickets/{id}', [App\Http\Controllers\TicketsController::class, 'update']);
    Route::put('/tickets-delete/{id}', [App\Http\Controllers\TicketsController::class, 'destroy']);

    // ROUTES ARQUIVOS
    Route::post('/files', [App\Http\Controllers\UploadController::class, 'upload']);
});
