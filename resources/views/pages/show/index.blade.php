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
            <a href="{{ route('users.edit', $user) }}">✏️</a>
            <form action="{{ route('users.destroy', $user) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit">❌</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ route('users.create') }}">Добавить 1 пользователя</a>
<a href="{{ route('users.create-multiple') }}">Добавить 3 пользователей</a>