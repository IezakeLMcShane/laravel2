@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Добавление нескольких пользователей</h1>

    <!-- Вывод ошибок валидации -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store_many') }}" method="POST">
        @csrf

        <!-- Поля для 3 пользователей -->
        @for ($i = 0; $i < 3; $i++)
            <div class="card mb-4">
                <div class="card-header">Пользователь {{ $i + 1 }}</div>
                <div class="card-body">
                    <!-- Логин -->
                    <div class="mb-3">
                        <label class="form-label">Логин</label>
                        <input type="text" 
                               name="login[]" 
                               class="form-control @error("login.$i") is-invalid @enderror" 
                               value="{{ old("login.$i") }}"
                               required>
                        @error("login.$i")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Пароль -->
                    <div class="mb-3">
                        <label class="form-label">Пароль</label>
                        <input type="password" 
                               name="password[]" 
                               class="form-control @error("password.$i") is-invalid @enderror" 
                               required>
                        @error("password.$i")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" 
                               name="email[]" 
                               class="form-control @error("email.$i") is-invalid @enderror" 
                               value="{{ old("email.$i") }}"
                               required>
                        @error("email.$i")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        @endfor

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save"></i> Сохранить всех
        </button>
    </form>
</div>
@endsection