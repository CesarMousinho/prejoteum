<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Funcionario
Route::get('/funcionario', [FuncionarioController::class, 'index']);

Route::get('/create', [FuncionarioController::class, 'create']);

// --------------------Categoria---------------------------
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');  

Route::get('/categoria/{id}/edit' , [CategoriaController::class, 'edit'])->name('categoria.edit');

Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');

Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

//--------------------Categoria---------------------------\\



// --------------------Postagem---------------------------
Route::get('/postagem', [PostagemController::class, 'index'])->name('postagem.index');

Route::get('/postagem/create', [PostagemController::class , 'create'])->name('postagem.create');


//--------------------Postagem---------------------------\\

//PAREI NO MINUTO 13:30 DE CRIAÇÃO DA POSTAGEM.
