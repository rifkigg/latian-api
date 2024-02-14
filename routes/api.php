<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/posts',[PostController::class, 'index'])->middleware(['auth:sanctum']); //kita buat bentuk array buat jaga jaga membutuhkan middleware lebih dari satu
Route::get('/posts/{id}',[PostController::class, 'show'])->middleware(['auth:sanctum']);

Route::post('/login', [AuthenticationController::class, 'login']);
Route::get("/logout", [AuthenticationController::class, 'logout'])->middleware(['auth:sanctum']);
Route::get('/me', [AuthenticationController::class, 'me'])->middleware(['auth:sanctum']);
// Route::get('/posts2/{id}',[PostController::class, 'show2']);