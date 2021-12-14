<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CitaController;



Route::get('/',[CitaController::class,'index'])->name('citas.index');

Route::get('/citas/{cita}', [CitaController::class, 'show'])->name('citas.show');

Route::get('category/{category:slug}', [CitaController::class, 'category'])->name('citas.category');

Route::get('tipo/{tipo}',[CitaController::class,'tipo'])->name('citas.tipo');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
