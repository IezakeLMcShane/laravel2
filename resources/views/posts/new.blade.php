@extends('layouts.app') {{-- Используйте ваш основной шаблон --}}

@section('content')
    <h1>Создать новую статью</h1>

    <form method="POST" action="{{ route('post.new') }}">
        @csrf

        <div>
            <label>Заголовок:</label>
            <input type="text" name="title" required>
            @error('title') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Краткое описание:</label>
            <input type="text" name="desc" required>
            @error('desc') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Текст статьи:</label>
            <textarea name="text" rows="5" required></textarea>
            @error('text') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Дата публикации:</label>
            <input type="datetime-local" name="date" required>
            @error('date') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Сохранить</button>
    </form>

    <a href="{{ route('post.all') }}">Назад к списку</a>
@endsection