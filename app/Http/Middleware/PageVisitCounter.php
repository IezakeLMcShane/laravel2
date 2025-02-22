<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PageVisitCounter
{
    public function handle(Request $request, Closure $next)
    {
        // Проверяем, существует ли счетчик в сессии
        if (session()->has('page_visits')) {
            // Увеличиваем счетчик на 1
            $count = session('page_visits') + 1;
        } else {
            // Если нет, устанавливаем в 1
            $count = 1;
        }

        // Сохраняем обновленный счетчик в сессии
        session(['page_visits' => $count]);

        return $next($request);
    }
}