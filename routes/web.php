<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ChisiamoController;
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

Route::get('/', [PublicController::class, 'Homepage'])->name('Homepage');
Route::get('contattaci-form', [PublicController::class, 'Contattaci'])->name('Contattaci');
Route::post('/Contattaci/submit', [PublicController::class, 'Contattacci_submit'])->name('Contattaci.submit');

Route::get('/chi-siamo', [ChisiamoController::class, 'index'])->name('chi.siamo');

Route::get('/chi-siamo/utenti/dettaglio/{id}', [ChisiamoController::class, 'show'])->name('dettaglio-utente');

Route::get('/dettagli-utente', [PublicController::class, 'Dettagli'] )->name('dettagli.utente');