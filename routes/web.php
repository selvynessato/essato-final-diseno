<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\ContactoController;
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

Route::get('/', [BlogController::class, 'welcome'])->name('welcome');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog:slug_blog}', [BlogController::class, 'detalleblog'])->name('blog.detalle');

Route::get('/paises', [PaisController::class, 'indexPais'])->name('paises.index');
Route::post('/obtener-departamentos', [DepartamentoController::class, 'obtenerDepartamentos'])->name('obtener-departamentos');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');
Route::get('/contacto/create', [ContactoController::class, 'create'])->name('contacto.create');

Route::get('/recursos-redes-sociales', function () {
    return view('todo.recursosRedes');
});

// Rutas autenticadas
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/recurso', [RecursoController::class, 'index'])->name('recurso.index');
    Route::get('/recurso/{recurso:slug_recurso}', [RecursoController::class, 'detallerecurso'])->name('recurso.detalle');
    Route::get('/{nombre_archivo}', [RecursoController::class, 'descargarRecurso'])->name('recurso.descargar');
});