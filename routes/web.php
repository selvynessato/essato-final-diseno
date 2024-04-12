<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\HomeController;


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


Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();

// Rutas autenticadas
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/', [PaisController::class, 'listarPaises']);
Route::get('/departamentos/{id}', [PaisController::class, 'listarDepartamento'])->name('departamentos');

Route::get('/', [BlogController::class, 'welcome'])->name('welcome');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog:slug_blog}', [BlogController::class, 'detalleblog'])->name('blog.detalle');

Route::get('/recursos', [RecursoController::class, 'index'])->name('recurso.index');



