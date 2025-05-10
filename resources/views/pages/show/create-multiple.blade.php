<form action="{{ route('users.store-multiple') }}" method="POST">
    @csrf
    @for($i = 1; $i <= 3; $i++)
    <div class="user-group">
        <h3>Пользователь {{ $i }}</h3>
        <input type="text" name="login[{{ $i }}]" placeholder="Логин" required>
        <input type="password" name="password[{{ $i }}]" placeholder="Пароль" required>
        <input type="email" name="email[{{ $i }}]" placeholder="Email" required>
    </div>
    @endfor
    <button type="submit">Сохранить</button>
</form>