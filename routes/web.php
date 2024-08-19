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
use App\Http\Controllers\GestionMarcheController;

Route::get('/gestion_marches', [GestionMarcheController::class, 'index'])->name('gestion_marches.index');
Route::get('/gestion_marches/create', [GestionMarcheController::class, 'create'])->name('gestion_marches.create');
Route::post('/gestion_marches', [GestionMarcheController::class, 'store'])->name('gestion_marches.store');
Route::get('/gestion_marches/{gestion_marche}', [GestionMarcheController::class, 'show'])->name('gestion_marches.show');
Route::get('/gestion_marches/{gestion_marche}/edit', [GestionMarcheController::class, 'edit'])->name('gestion_marches.edit');
Route::put('/gestion_marches/{gestion_marche}', [GestionMarcheController::class, 'update'])->name('gestion_marches.update');
Route::delete('/gestion_marches/{gestion_marche}', [GestionMarcheController::class, 'destroy'])->name('gestion_marches.destroy');
////////////
Route::get('/marches', [GestionMarcheController::class, 'marches'])->name('marches');

use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
// Traiter la demande de déconnexion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');






use App\Http\Controllers\RegisterController;

// Route pour afficher le formulaire d'inscription
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');

// Route pour traiter le formulaire d'inscription (POST)
Route::post('/register', [RegisterController::class, 'register'])->name('register');