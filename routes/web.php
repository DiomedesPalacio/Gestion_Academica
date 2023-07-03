<?php

use App\Http\Controllers\CentroContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngreseController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\QuienController;
use App\Http\Controllers\RegistreseController;

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

Route::get('/', HomeController::class)->name('home');

Route::view('quienes', 'quienes')->name('quienes');

Route::get('Noticias', NoticiasController::class)->name('noticias');

Route::get('Registrese', RegistreseController::class)->name('registro');

Route::get('Ingrese', IngreseController::class)->name('ingreso');

Route::get('Centros', CentroContoller::class)->name('centros');

Route::get('Programas', ProgramasController::class )->name('programas');


