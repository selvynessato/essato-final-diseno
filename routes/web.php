<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogcreateController;
use App\Http\Controllers\BlognewController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ContactoMensajeController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EncontraressatoController;
use App\Http\Controllers\EmpresaNegocioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ODSController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\Tipo_EmpresaController;
use App\Http\Controllers\WelcomeController;


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
Route::get('/ongs', function () {
    return view('todo.ongs');
});


// Rutas autenticadas
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::match(['get', 'post'], '/departamento', [DepartamentoController::class, 'departamento'])->name('departamento');
    Route::post('/departamentos/crear', [DepartamentoController::class, 'store'])->name('crear-departamento');
    Route::put('/departamentos/{id}', [DepartamentoController::class, 'update'])->name('actualizar-departamento');
    Route::delete('/departamentos/{id}', [DepartamentoController::class, 'destroy'])->name('eliminar-departamento');
    Route::match(['get', 'post'], '/municipio', [MunicipioController::class, 'municipio'])->name('municipio');

    Route::post('/upload', [BlognewController::class, 'upload'])->name('upload');

    Route::get('/blogs/categoria', [BlogcreateController::class, 'index'])->name('categorias.index');
    Route::post('/blogs/categoria', [BlogcreateController::class, 'store'])->name('categorias.store');
    Route::put('/blogs/categoria/{id}', [BlogcreateController::class, 'update'])->name('categorias.update');
    Route::delete('/blogs/categoria/{id}', [BlogcreateController::class, 'destroy'])->name('categorias.destroy');

    Route::get('/blogs/nuevo', [BlognewController::class, 'index'])->name('blogs.index');
    Route::post('/blogs/nuevo', [BlognewController::class, 'store'])->name('blogs.store');
    Route::put('/blogs/nuevo/{id}', [BlognewController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/nuevo/{id}', [BlognewController::class, 'destroy'])->name('blogs.destroy');


    Route::get('/recurso', [RecursoController::class, 'index'])->name('recurso.index');
    Route::get('/recurso/{recurso:slug_recurso}', [RecursoController::class, 'detallerecurso'])->name('recurso.detalle');
    Route::get('/{nombre_archivo}', [RecursoController::class, 'descargarRecurso'])->name('recurso.descargar');


    Route::get('/empresa/tipo_empresa', [Tipo_EmpresaController::class, 'index'])->name('tipo_empresa.index');
    Route::post('/empresa/tipo_empresa', [Tipo_EmpresaController::class, 'store'])->name('tipo_empresa.store');
    Route::put('/empresa/tipo_empresa/{tipo_empresa}', [Tipo_EmpresaController::class, 'update'])->name('tipo_empresa.update');
    Route::delete('/empresa/tipo_empresa/{tipo_empresa}', [Tipo_EmpresaController::class, 'destroy'])->name('tipo_empresa.destroy');

    Route::get('/empresa/actividad', [ActividadController::class, 'index'])->name('actividad.index');
    Route::post('/empresa/actividad', [ActividadController::class, 'store'])->name('actividad.store');
    Route::put('/empresa/actividad/{actividad}', [ActividadController::class, 'update'])->name('actividad.update');
    Route::delete('/empresa/actividad/{actividad}', [ActividadController::class, 'destroy'])->name('actividad.destroy');

    Route::get('/empresa/empresa_negocio', [EmpresaNegocioController::class, 'index'])->name('empresa.index');
    Route::post('/empresa/empresa_negocio', [EmpresaNegocioController::class, 'store'])->name('empresa.store');
    Route::put('/empresa/empresa_negocio/{empresa}', [EmpresaNegocioController::class, 'update'])->name('empresa.update');
    Route::delete('/empresa/empresa_negocio/{empresa}', [EmpresaNegocioController::class, 'destroy'])->name('empresa.destroy');

    Route::get('/contacto/encontrar-essato', [EncontraressatoController::class, 'index'])->name('encontraressato.index');
    Route::post('/contacto/encontrar-essato', [EncontraressatoController::class, 'store'])->name('encontraressato.store');
    Route::put('/contacto/encontrar-essato/{encontraressato}', [EncontraressatoController::class, 'update'])->name('encontraressato.update');
    Route::delete('/contacto/encontrar-essato/{encontraressato}', [EncontraressatoController::class, 'destroy'])->name('encontraressato.destroy');

    Route::get('/contacto/encontrar-essato', [EncontraressatoController::class, 'index'])->name('encontraressato.index');
    Route::post('/contacto/encontrar-essato', [EncontraressatoController::class, 'store'])->name('encontraressato.store');
    Route::put('/contacto/encontrar-essato/{encontraressato}', [EncontraressatoController::class, 'update'])->name('encontraressato.update');
    Route::delete('/contacto/encontrar-essato/{encontraressato}', [EncontraressatoController::class, 'destroy'])->name('encontraressato.destroy');

    Route::get('/contacto/mensaje-essato', [ContactoMensajeController::class, 'index'])->name('contacto.index');
    Route::post('/contacto/mensaje-essato', [ContactoMensajeController::class, 'store'])->name('contacto.store');
    Route::put('/contacto/mensaje-essato/{id}', [ContactoMensajeController::class, 'update'])->name('contacto.update');
    Route::delete('/contacto/mensaje-essato/{id}', [ContactoMensajeController::class, 'destroy'])->name('contacto.destroy');
   
});
