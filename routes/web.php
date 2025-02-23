<?php

use App\Http\Controllers\PageController;

Route::get('/method-one', [PageController::class, 'methodOne']);
Route::get('/method-two', [PageController::class, 'methodTwo']);
Route::get('/method-three', [PageController::class, 'methodThree']);