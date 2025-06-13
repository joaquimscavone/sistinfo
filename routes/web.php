<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users',[App\Http\Controllers\UsuariosController::class,'index'])->name('usuarios');
Route::post('/user/{user}/changeAdmin',[App\Http\Controllers\UsuariosController::class,'changeAdmin'])->name('changeAdmin');
Route::post('/user/{user}/changeTecnico',[App\Http\Controllers\UsuariosController::class,'changeTecnico'])->name('changeTecnico');
