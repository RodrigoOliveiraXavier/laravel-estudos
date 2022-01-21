<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudosController;
use App\Http\Controllers\UsuarioController;

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

// Redirecionamento de rotas
Route::redirect('/', '/estudos');

// Grupo de rotas
Route::prefix('/estudos')->group(function () {
    // Ligação Controller -> View
    Route::get('/', [EstudosController::class, 'index']);

    // Rota com parametros
    Route::get('/parametros/{param}', function ($param) {
        echo 'Parametros passados: ' . $param;
    });

    Route::get('/users', [UsuarioController::class, 'index']);
});

// Fallback de rotas
Route::fallback(function () {
    return view('404');
});
