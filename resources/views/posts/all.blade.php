<table>
    <!-- resources/views/posts/all.blade.php -->
<div style="margin-bottom: 20px;">
    <a href="{{ route('post.new') }}" style="
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
    ">
        ➕ Добавить новую статью
    </a>
</div>

<table>
    <!-- Остальное содержимое таблицы -->
</table>
    <tr>
        <th>ID</th>
        <th>Заголовок</th>
        <th>Описание</th>
        <th>Редактировать</th>
        <th>Удалить</th>
    </tr>
    @foreach ($posts as $post)
    
    <tr>
        <td>{{ $post->id }}</td>
        
        <td>
            <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
        </td>
        <td>{{ $post->desc }}</td>
        <td>
            <td>
    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">✏️ Редактировать</a>
</td>
        </td>
        <td>
            <form action="{{ route('post.delete', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">🗑️</button>
            </form>
        </td>
    </tr>
    
    @endforeach
</table>