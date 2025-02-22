<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name}', function ($name) {
    $users = [ 
        'user1' => 'city1', 
        'user2' => 'city2', 
        'user3' => 'city3', 
        'user4' => 'city4', 
        'user5' => 'city5'
    ];

    // Проверяем, существует ли имя пользователя в массиве
    if (array_key_exists($name, $users)) {
        // Возвращаем город пользователя
        return "Город пользователя {$name} - {$users[$name]}.";
    }

    // Если пользователь не найден, возвращаем сообщение об ошибке
    return "Пользователь с именем {$name} не найден.";
});