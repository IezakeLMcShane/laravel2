<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
public function getAll($order = 'date', $dir = 'desc') {
    // Сортировка по переданным параметрам или по умолчанию (date и desc)
    $posts = Post::orderBy($order, $dir)->get();
    return view('posts.all', compact('posts', 'order', 'dir'));
}
public function getOne($id) {
    $post = Post::findOrFail($id);
    return view('posts.one', compact('post'));
}

public function newPost(Request $request) {
    // Если форма отправлена (POST-запрос)
    if ($request->isMethod('post')) {
        // Валидация данных
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'text' => 'required|string',
            'date' => 'required|date',
        ]);

        // Создание новой статьи
        Post::create($validated);

        // Редирект на список статей
        return redirect()->route('post.all');
    }

    // Если GET-запрос — показать форму
    return view('posts.new');
}


public function editPost(Request $request, $id) {
    $post = Post::findOrFail($id);

    if ($request->isMethod('put')) { // Обработка PUT-запроса
        $validated = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'date' => 'required|date',
        ]);

        $post->update($validated);
        return redirect()->route('post.all')->with('success', 'Статья обновлена!');
    }

    return view('posts.edit', compact('post'));

}


public function delPost($id) {
    Post::destroy($id);
    return redirect()->route('post.all');
}

}
