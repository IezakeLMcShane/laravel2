<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Главная страница
Route::get('/', function () {
    return view('welcome');
});

// Маршрут для отображения пользователя по ID
Route::get('/user/{id?}', [UserController::class, 'show']);

// Альтернативный маршрут для отображения пользователя по ID
Route::get('/user-detail/{id?}', function ($id = 0) {
    return "User ID: $id";
});