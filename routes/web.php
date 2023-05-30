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

Route::get("/", [App\Http\Controllers\pages\homeController::class, "home"])->name("dashboard");
Route::get("/category", [App\Http\Controllers\pages\homeController::class, "category"])->name("category");
Route::get("/author", [App\Http\Controllers\pages\homeController::class, "author"])->name("author");
Route::get("/borrowings", [App\Http\Controllers\pages\homeController::class, "borrowings"])->name("borrowings");
