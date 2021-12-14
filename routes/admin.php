<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TipoController;
use App\Http\Controllers\Admin\CitaController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\ParametroController;

use App\Http\Controllers\Admin\AdminCitaController;
use App\Http\Controllers\Admin\InformacionController;
// Route::get('', [homeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::get('', [homeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');


Route::resource('users', UserController::class)->only(['index','edit','update'])->names('admin.users');

Route::resource('roles', RoleController::class)->names('admin.roles');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

Route::resource('tipos', TipoController::class)->except('show')->names('admin.tipos');

Route::resource('citas', CitaController::class)->except('show')->names('admin.citas');

Route::resource('parametros', ParametroController::class)->except('show')->names('admin.parametros');

Route::resource('citasadmin', AdminCitaController::class)->except('show')->names('admin.citasadmin');

Route::resource('informacion', InformacionController::class)->names('admin.informacion');
