<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function methodOne()
    {
        return view('pages.show.methodOne', ['title' => 'Это метод один', 'content' => 'Содержимое метода один.']);
    }

    public function methodTwo()
    {
        return view('pages.show.methodTwo', ['title' => 'Это метод два', 'content' => 'Содержимое метода два.']);
    }

    public function methodThree()
    {
        return view('pages.show.methodThree', ['title' => 'Это метод три', 'content' => 'Содержимое метода три.']);
    }
}