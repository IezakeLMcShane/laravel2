<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userssController;
use App\Http\Controllers\ApiDataController;


// Показ формы создания пользователя
Route::get('/users/create', [UserController::class, 'create'])
     ->name('users.create');

// Обработка формы
Route::post('/users/insert', [UserController::class, 'insert'])
     ->name('users.insert');


Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/insert', [UserController::class, 'insert'])->name('users.insert');