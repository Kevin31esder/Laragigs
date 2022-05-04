<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ListingController::class, 'index']);


Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');


Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');


Route::put('/listings/{listing}',[ListingController::class, 'uptade'])->middleware('auth');

Route::delete('/listings/{listing}',[ListingController::class, 'destroy'])->middleware('auth');



Route::get('/register',[UserController::class,'create'])->middleware('guest');

Route::post('/users',[UserController::class,'store']);

Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::get('/listings/manage',[ListingController::class,'manage'])->middleware('auth');
Route::post('users/authenticate',[UserController::class,'authenticate']);

Route::get('/listings/{listing}',[ListingController::class,'show']);

