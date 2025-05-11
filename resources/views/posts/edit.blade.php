@extends('layouts.app')

@section('content')
    <h1>Редактировать статью</h1>
     
<form method="POST" action="{{ route('post.edit', $post->id) }}">
    @csrf
    @method('PUT') <!-- Указываем метод PUT -->

        <div>
            <label>Заголовок:</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Краткое описание:</label>
            <input type="text" name="desc" value="{{ old('desc', $post->desc) }}" required>
            @error('desc') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Текст статьи:</label>
            <textarea name="text" rows="5" required>{{ old('text', $post->text) }}</textarea>
            @error('text') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Дата публикации:</label>
            <input type="datetime-local" name="date" 
    value="{{ old('date', \Carbon\Carbon::parse($post->date)->format('Y-m-d\TH:i')) }}" 
    required>    
    <button type="submit">Сохранить изменения</button>
    <a href="{{ route('post.all') }}">Назад к списку</a>
</form>
@endsection