<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudosController;
use App\Http\Controllers\TarefasController;
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
    Route::post('/users', [UsuarioController::class, 'index']);

    // Grupo de rotas das tarefas
    Route::prefix('/tarefas')->group(function () {
        Route::get('/', [TarefasController::class, 'list']); // Listagem de tarefas

        Route::get('add', [TarefasController::class, 'create']); // Tela de Adição
        Route::post('add', [TarefasController::class, 'store']); // Ação de Adição

        Route::get('/edit/{id}', [TarefasController::class, 'edit']); // Tela de Edição
        Route::post('/edit/{id}', [TarefasController::class, 'update']); // Ação de Edição

        Route::get('/delete/{id}', [TarefasController::class, 'delete']); // Ação de Exclusão

        Route::get('/marcar/{id}', [TarefasControlelr::class, 'done']); // Marcar Resolvido Sim/Não
    });
});

// Fallback de rotas
Route::fallback(function () {
    return view('404');
});
