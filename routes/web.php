<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\UserController::class,"index"]);
Route::get('article/{id}', [\App\Http\Controllers\UserController::class,"article"]);
Route::get('about', [\App\Http\Controllers\UserController::class,"about"]);
Route::get('contactUS', [\App\Http\Controllers\UserController::class,"contactUs"]);
