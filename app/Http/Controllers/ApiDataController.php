<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiDataController extends Controller
{
    public function store(Request $request)
    {
        // Извлекаем значение theme из JSON-тела
        $theme = $request->json('settings.theme');

        // Возвращаем ответ в формате JSON
        return response()->json([
            'selected_theme' => $theme,
        ], 200); // статус 200 OK
    }
}
