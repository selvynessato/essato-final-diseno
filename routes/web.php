<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\BlogController;
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


Auth::routes();

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/', [PaisController::class, 'listarPaises']);
Route::get('/departamentos/{id}', [PaisController::class, 'listarDepartamento'])->name('departamentos');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');


