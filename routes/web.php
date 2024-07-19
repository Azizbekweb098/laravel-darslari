<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create'] );
Route::get('/users/{user}', [UserController::class, 'show']);

Route::get('/users/{user}/edit', [UserController::class, 'edit']);

Route::get('/user/photo', [PhotoController::class, 'photo']);

Route::post('/user-create', [UserController::class, 'store']);
