<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeliculacarteleraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::resource('peliculacarteleras', App\Http\Controllers\PeliculacarteleraController::class);

Route::resource('peliculaestrenos', App\Http\Controllers\PeliculaestrenoController::class);

Route::resource('salas', App\Http\Controllers\SalaController::class);

Route::resource('cliente', App\Http\Controllers\clienteController::class);

Route::get('cliente/estrenos', [App\Http\Controllers\clienteController::class, 'show']);

Route::resource('compra', App\Http\Controllers\CompraController::class);

Route::resource('users', App\Http\Controllers\UserController::class);

Route::get('/compra/pdf', [CompraController::class, 'createPDF']);




