<?php

use App\Http\Controllers\PageController;

Route::get('/pages/show', [PageController::class, 'showOne']);
Route::get('/pages/all', [PageController::class, 'showAll']);
Route::get('/pages/show/{id}', [PageController::class, 'show']);