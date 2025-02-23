<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Эта строка должна быть здесь

class PageController extends Controller
{
    // Действие showOne
    public function showOne()
    {
        $pageTitle = 'Страница 1';
        $name = 'Иван'; // пример имени
        $surname = 'Иванов'; // пример фамилии

        return view('pages.show.showOne', compact('pageTitle', 'name', 'surname'));
    }

    // Действие showAll
    public function showAll()
    {
        return "Это действие showAll";
    }

    // Метод show
    public function show($id)
    {
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];

        if (array_key_exists($id, $pages)) {
            return $pages[$id];
        } else {
            return "Страница с номером {$id} не найдена.";
        }
    }

    // Метод test
    public function test()
    {
        return view('pages.show.test');
    }
}