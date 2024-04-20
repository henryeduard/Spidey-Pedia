<?php

use App\Http\Controllers\ControladorTotem;
use App\Http\Controllers\ControladorTraje;
use App\Http\Controllers\ControladorUniverso;
use Illuminate\Support\Facades\Route;

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

// Totems
Route::get('/spider-totems', [ControladorTotem::class, 'vistaListado'])->name('listadoTotem');
Route::get('/spider-totem/{alias}-{universo}', [ControladorTotem::class, 'vistaIndividual'])->name('entradaTotem');

// Universos
Route::get('/universos', [ControladorUniverso::class, 'vistaListado'])->name('listadoUniverso');
Route::get('/universo/{numero}', [ControladorUniverso::class, 'vistaIndividual'])->name('entradaUniverso');

// Trajes
Route::get('/trajes', [ControladorTraje::class, 'vistaListado'])->name('listadoTraje');
Route::get('/traje/{nombre}-{totem}', [ControladorTraje::class, 'vistaIndividual'])->name('entradaTraje');
