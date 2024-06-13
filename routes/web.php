<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ODSController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\WelcomeController;
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

// Rutas no autenticadas
Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::post('/obtener-departamentos', [WelcomeController::class, 'obtenerDepartamentosPorPais'])->name('obtener-departamentos');
Route::get('/empresa', [EmpresaController::class, 'index'])->name('empresa.index');
Route::get('/ods', [ODSController::class, 'index'])->name('ods.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog:slug_blog}', [BlogController::class, 'detalleblog'])->name('blog.detalle');
Route::get('/filtrar-blogs', [BlogController::class, 'filtrarBlogs'])->name('filtrar-blogs');
Route::get('/obtener-departamentos', [WelcomeController::class, 'indexDepartamento'])->name('obtener-departamentos');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');
Route::get('/contacto/create', [ContactoController::class, 'create'])->name('contacto.create');
Route::get('/recursos-redes-sociales', function () {
    return view('todo.recursosRedes');
});


// Rutas autenticadas
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::match(['get', 'post'], '/departamento', [DepartamentoController::class, 'departamento'])->name('departamento');
    Route::post('/departamentos/crear', [DepartamentoController::class, 'store'])->name('crear-departamento');
    Route::put('/departamentos/{id}', [DepartamentoController::class, 'update'])->name('actualizar-departamento');
    Route::delete('/departamentos/{id}', [DepartamentoController::class, 'destroy'])->name('eliminar-departamento');
    Route::match(['get', 'post'], '/municipio', [MunicipioController::class, 'municipio'])->name('municipio');
    Route::get('/recurso', [RecursoController::class, 'index'])->name('recurso.index');
    Route::get('/recurso/{recurso:slug_recurso}', [RecursoController::class, 'detallerecurso'])->name('recurso.detalle');
    Route::get('/{nombre_archivo}', [RecursoController::class, 'descargarRecurso'])->name('recurso.descargar');
});