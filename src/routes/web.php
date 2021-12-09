<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('home');
})->name('home');
//Route::view('/home', 'home')->name('home');   
Route::get('/user', [UserController::class, '__invoke'])->name('user');

Route::resource('/proyectos', ProyectoController::class)->parameters(['proyectos' => 'project']);

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', [MessageController::class,'store'])->name('message.store');

// Ruta con resource y específicando el nombre raíz de la ruta
// Route::resource('/proyectos', ProyectoController::class)->names('proyectos')->parameters(['proyectos' => 'project']);

//rutas sin resources
/* Route::get('/proyectos', [ProyectoController::class, 'index'])->name('proyectos.index');
Route::post('/proyectos', [ProyectoController::class, 'store'])->name('proyectos.store');
Route::get('/proyectos/create', [ProyectoController::class, 'create'])->name('proyectos.create');
Route::get('/proyectos/{project}/edit', [ProyectoController::class, 'edit'])->name('proyectos.edit');
Route::patch('/proyectos/{project}', [ProyectoController::class, 'update'])->name('proyectos.update');
Route::get('/proyectos/{project}', [ProyectoController::class,'show'])->name('proyectos.show');
Route::delete('/proyectos/{project}',[ProyectoController::class, 'destroy'])->name('proyectos.destroy'); */



Auth::routes();

