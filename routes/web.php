<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\MovieActors;
use App\Http\Controllers\Register;
Route::get('/',[MoviesController::class,'index'])->name('movies.index');
Route::get('/movies/{movie}',[MoviesController::class,'show'])->name('movies.show');

Route::get('/actors',[MovieActors::class,'index'])->name('actors.index');
Route::get('/actors/{actor}',[MovieActors::class,'show'])->name('actors.show');

Route::get('/register',[Register::class,'index'])->name('register.index');