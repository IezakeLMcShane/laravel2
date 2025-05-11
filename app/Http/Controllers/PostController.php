<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
public function getAll($order = 'date', $dir = 'desc') {
    // Получаем все записи без ограничений
    $posts = Post::orderBy($order, $dir)->get();
    return view('posts.all', compact('posts', 'order', 'dir'));
}
public function getOne($id) {
    $post = Post::findOrFail($id);
    return view('posts.one', compact('post'));
}

public function newPost(Request $request) {
    if ($request->isMethod('post')) {
        $data = $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required',
            'text' => 'required',
            'date' => 'required|date',
        ]);
        Post::create($data);
        return redirect()->route('post.all');
    }
    return view('posts.new');
}

public function editPost(Request $request, $id) {
    $post = Post::findOrFail($id);
    if ($request->has('submit')) {
        $post->title = $request->title;
        $post->desc = $request->desc;
        $post->text = $request->text;
        $post->date = $request->date;
        $post->save();
        return redirect()->route('post.all');
    }
    return view('posts.edit', compact('post'));
}

public function delPost($id) {
    Post::destroy($id);
    return redirect()->route('post.all');
}
}
