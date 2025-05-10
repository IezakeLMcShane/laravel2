<!DOCTYPE html>
<html>
<head>
    <title>Пользователи</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Список пользователей</h1>

    <!-- Таблица пользователей -->
    <table>
        <tr>
            <th>ID</th>
            <th>Логин</th>
            <th>Пароль</th>
            <th>Email</th>
            <th>Действия</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->login }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.edit', $user->id) }}">✏️ Редактировать</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">❌ Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- Ссылки для добавления пользователей -->
    <div style="margin-top: 20px;">
        <a href="{{ route('users.create') }}" style="margin-right: 10px;">➕ Добавить 1 пользователя</a>
        <a href="{{ route('users.create-multiple') }}">➕ Добавить 3 пользователей</a>
    </div>
</body>
</html>