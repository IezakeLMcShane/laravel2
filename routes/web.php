<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/pages/show', [PageController::class, 'showOne']);
Route::get('/pages/all', [PageController::class, 'showAll']);
Route::get('/pages/show/{id}', [PageController::class, 'show']);
Route::get('/test', [PageController::class, 'test']);