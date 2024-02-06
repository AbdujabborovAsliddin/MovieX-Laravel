<?php

use App\Http\Controllers\MovieActors;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\RegisterController;

Route::get('/',[MoviesController::class,'index'])->name('movies.index');
Route::get('/movies/{movie}',[MoviesController::class,'show'])->name('movies.show');

Route::get('/actors',[MovieActors::class,'index'])->name('actors.index');
Route::get('/actors/{actor}',[MovieActors::class,'show'])->name('actors.show');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');
Route::get('/register/verify',[RegisterController::class,'check'])->name('register.check');
Route::get('/register/verify',[RegisterController::class,'verify'])->name('register.verify');
Route::get('/login',[LoginController::class,'index'])->name('login');