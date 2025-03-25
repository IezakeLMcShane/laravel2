<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userssController extends Controller
{
    public function show(Request $request)
    {
        // Получаем параметры name и age
        $name = $request->query('name');
        $age = $request->query('age');

        // Проверяем, что оба параметра переданы
        if (!$name || !$age) {
            return response()->json([
                'error' => 'Параметры name и age обязательны.'
            ], 400); // 400 Bad Request
        }

        // Формируем сообщение и возвращаем его в формате JSON
        return response()->json([
            'message' => "Привет, $name! Тебе $age лет."
        ]);
    }
}