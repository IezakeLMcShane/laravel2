<!DOCTYPE html>
<html>
<head>
    <title>Редактировать пользователя</title>
    <style>
        .form-group { margin-bottom: 15px; }
        label { display: block; }
    </style>
</head>
<body>
    <h1>Редактировать пользователя: {{ $user->login }}</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Логин:</label>
            <input type="text" name="login" value="{{ $user->login }}" required>
        </div>

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="form-group">
            <label>Новый пароль (оставьте пустым, если не меняется):</label>
            <input type="password" name="password">
        </div>

        <button type="submit">Сохранить изменения</button>
    </form>

    <a href="{{ route('users.index') }}">Назад к списку</a>
</body>
</html>