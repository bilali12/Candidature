<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\CandidatFormationController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\NombreDeCandidatParFormation;
use App\Http\Controllers\NombreDeFormationParRef;
use App\Http\Controllers\ReferentielController;
use App\Http\Controllers\TypeController;
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
    return view('welcom');
});

Route::get('/candidat/index', [CandidatController::class, 'index'])->name('candidat.index');
Route::get('/candidat/create', [CandidatController::class, 'create'])->name('candidat.create');
Route::post('/store1', [CandidatController::class, 'store']);

Route::get('/formation/create', [FormationController::class, 'create'])->name('formation.create');
Route::get('/formation/index', [FormationController::class, 'index'])->name('formation.index');
Route::post('/store2', [FormationController::class, 'store']);

Route::get('/referentiel/create', [ReferentielController::class, 'create'])->name('referentiel.create');
Route::get('/referentiel/index', [ReferentielController::class, 'index'])->name('referentiel.index');
Route::post('/store3', [ReferentielController::class, 'store']);

Route::get('/type/create', [TypeController::class, 'create'])->name('type.create');
Route::get('/type/index', [TypeController::class, 'index'])->name('type.index');
Route::post('/store4', [TypeController::class, 'store']);

Route::get('/candidat/formation/create', [CandidatFormationController::class, 'create'])->name('candidatformation');
Route::post('/store5', [CandidatFormationController::class, 'store']);

Route::get('/nombre/candidat/formation', [NombreDeCandidatParFormation::class, 'index'])->name('nombredecandidatparformation');
Route::get('/nombre/formation/referentiel', [NombreDeFormationParRef::class, 'index'])->name('nombredeformationparref');

