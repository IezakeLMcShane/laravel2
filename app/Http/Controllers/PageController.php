<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function methodOne()
    {
        $links = [
            [
                'text' => 'text1',
                'href' => 'http://href1',
            ],
            [
                'text' => 'text2',
                'href' => 'http://href2',
            ],
            [
                'text' => 'text3',
                'href' => 'http://href3',
            ],
        ];
    
        return view('pages.show.methodOne', [
            'title' => 'Это метод один',
            'content' => 'Содержимое метода один.',
            'links' => $links,
        ]);
    }

    public function methodTwo()
    {
        return view('pages.show.methodTwo', [
            'title' => 'Это метод два', 
            'content' => 'Содержимое метода два.'
        ]);
    }

    public function methodThree()
    {
        return view('pages.show.methodThree', [
            'title' => 'Это метод три', 
            'content' => 'Содержимое метода три.'
        ]);
    }
}