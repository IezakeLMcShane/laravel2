<form action="{{ route('users.store_many') }}" method="POST">
    @csrf
    @for ($i = 0; $i < 3; $i++)
        <div class="user-group">
            <h3>Пользователь {{ $i + 1 }}</h3>
            <input type="text" name="login[]" placeholder="Логин" required>
            <input type="password" name="password[]" placeholder="Пароль" required>
            <input type="email" name="email[]" placeholder="Email" required>
        </div>
    @endfor
    <button type="submit">Сохранить</button>
</form>