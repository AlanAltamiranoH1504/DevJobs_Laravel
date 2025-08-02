<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', [\App\Http\Controllers\VacanteController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');
//Route::get('/vacantes/create', [\App\Http\Controllers\VacanteController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');

//Rutas para perfil de usuario
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Rutas para vacantes
Route::middleware("auth")->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\VacanteController::class, "index"])->name('dashboard');
    Route::get('/vacantes/create', [\App\Http\Controllers\VacanteController::class, "create"])->name("vacantes.create");
    Route::get("/vacantes/{id}/edit", [\App\Http\Controllers\VacanteController::class, "edit"])->name("vacantes.edit");
});

//Rutas para notificaciones
Route::middleware("auth")->group(function () {
    Route::get("/notificaciones", [\App\Http\Controllers\NotificacionController::class, "__invoke"])->name("notificaciones.invoke");
});

//Rutas no protegidas para vacante
Route::get("/vacantes/{id}", [\App\Http\Controllers\VacanteController::class, "show"])->name("vacantes.show");

require __DIR__.'/auth.php';
