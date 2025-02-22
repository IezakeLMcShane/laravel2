<?php

use Illuminate\Support\Facades\Route;

Route::get('/visits', function () {
    $count = session('page_visits', 0);
    return "Вы посетили страницы сайта {$count} раз(а).";
});