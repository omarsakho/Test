<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;

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
    return view('layout');
});


Route::get('/apprenants', [ApprenantController::class, 'index'])->name('apprenants.index');
Route::get('/apprenants/create', [ApprenantController::class, 'create'])->name('apprenants.create');
Route::post('/apprenants', [ApprenantController::class, 'store'])->name('apprenants.store');
Route::get('/apprenants/{id}', [ApprenantController::class, 'show'])->name('apprenants.show');
Route::get('/apprenants/{id}/edit', [ApprenantController::class, 'edit'])->name('apprenants.edit');
Route::put('/apprenants/{id}', [ApprenantController::class, 'update'])->name('apprenants.update');
Route::delete('/apprenants/{id}', [ApprenantController::class, 'destroy'])->name('apprenants.destroy');


Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');
Route::get('/formations/create', [FormationController::class, 'create'])->name('formations.create');
Route::post('/formations', [FormationController::class, 'store'])->name('formations.store');
Route::get('/formations/{id}', [FormationController::class, 'show'])->name('formations.show');
Route::get('/formations/{id}/edit', [FormationController::class, 'edit'])->name('formations.edit');
Route::put('/formations/{id}', [FormationController::class, 'update'])->name('formations.update');
Route::delete('/formations/{id}', [FormationController::class, 'destroy'])->name('formations.destroy');
