@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1>Создание нового пользователя</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('users.insert') }}">
        @csrf
        
        <div class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" class="form-control" id="login" name="login" 
                   value="{{ old('login') }}" required>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email"
                   value="{{ old('email') }}" required>
        </div>
        
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Подтверждение пароля</label>
            <input type="password" class="form-control" id="password_confirmation" 
                   name="password_confirmation" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>
@endsection