<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('temas', App\Http\Controllers\TemaController::class)->middleware('auth');
Route::resource('subtemas', App\Http\Controllers\SubtemaController::class)->middleware('auth');
Route::resource('prodespers', App\Http\Controllers\ProdesperController::class)->middleware('auth');
Route::resource('planpros', App\Http\Controllers\PlanproController::class)->middleware('auth');
Route::resource('estrat-ins', App\Http\Controllers\EstratInController::class)->middleware('auth');
Route::resource('examenes', App\Http\Controllers\ExameneController::class)->middleware('auth');
Route::resource('actividades', App\Http\Controllers\ActividadeController::class)->middleware('auth');
Route::resource('sisevals', App\Http\Controllers\SisEvalController::class)->middleware('auth');
Route::resource('unidades', App\Http\Controllers\UnidadeController::class)->middleware('auth');
Route::resource('materias', App\Http\Controllers\MateriaController::class)->middleware('auth');
Route::resource('planeaciones', App\Http\Controllers\PlaneacioneController::class)->middleware('auth');