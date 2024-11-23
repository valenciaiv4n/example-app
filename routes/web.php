<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\InscriptoController;
use App\Http\Controllers\ProfesoreController;
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


Route::resource('socios', SocioController::class);

Route::resource('cursos', CursoController::class);
Route::resource('libros', LibroController::class);
Route::resource('inscriptos', InscriptoController::class);
Route::resource('profesores', ProfesoreController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
