<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'main']);

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/create', [UserController::class, 'create'] );
// Route::get('users/{user}/edit', [UserController::class, 'edit']);
// Route::get('/users/{isim}/{user}', [UserController::class, 'show']);
// Route::post('/user-create', [UserController::class, 'store']);
//Route::get('/user/create', [UserController::class, 'create']);
//
//Route::post('/user-blog', [UserController::class, 'getCreate']);

Route::get('/welcome',  [UserController::class, 'welcome']);


