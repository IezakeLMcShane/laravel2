<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Действие showOne
    public function showOne()
    {
        $pageTitle = 'Страница 1';
        $name = 'Иван'; // пример имени
        $surname = 'Иванов'; // пример фамилии
    
        return view('pages.showOne', compact('pageTitle', 'name', 'surname'));
    }
    // Действие showAll
    public function showAll()
    {
        return "Это действие showAll";
    }

    // Изменено действие showOne для отображения конкретной страницы
    public function show($id)
    {
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];

        // Проверка существования страницы
        if (array_key_exists($id, $pages)) {
            return $pages[$id];
        } else {
            return "Страница с номером {$id} не найдена.";
        }
    }
}