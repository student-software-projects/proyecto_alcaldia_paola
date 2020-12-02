<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\LocalidadController;

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

Route::get('equipos',[EquipoController::class,'index'])->name('equipo.index');
Route::get('jugadores',[JugadorController::class,'index'])->name('jugador.index');
Route::get('localidades',[LocalidadController::class,'index'])->name('localidad.index');

