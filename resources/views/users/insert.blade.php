<!DOCTYPE html>
<html>
<head>
    <title>Добавление пользователя</title>
</head>
<body>
    <h1>Добавить пользователя</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div>
            <label>Логин:</label>
            <input type="text" name="login" required>
        </div>
        <div>
            <label>Пароль:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>