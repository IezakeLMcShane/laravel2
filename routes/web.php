<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

Route::get('/method-one', [PageController::class, 'methodOne']);
Route::get('/method-two', [PageController::class, 'methodTwo']);
Route::get('/method-three', [PageController::class, 'methodThree']);
Route::get('/users', [UserController::class, 'showUsers']);