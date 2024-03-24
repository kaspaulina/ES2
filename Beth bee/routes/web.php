<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatoController;

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

Route::get('/', function () { return view('homepage'); });
Route::get('/home', function () { return view('homepage'); });

Route::get('/candidatos', [CandidatoController::class, 'index'])->name('candidatos');
Route::get('/insights', function () { return view('insights'); })->name('insights');
Route::get('/municipios', function () { return view('municipios'); })->name('municipios');
Route::get('/partidos', function () { return view('partidos'); })->name('partidos');
Route::get('/saibamais', function () { return view('saibamais'); })->name('saibamais');
Route::get('/informacoes', function () { return view('informacoes'); })->name('informacoes');
