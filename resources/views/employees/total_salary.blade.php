@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Общая зарплата сотрудников</h1>
        <div class="alert alert-success">
            Итого: {{ number_format($total, 2) }} ₽
        </div>
    </div>
@endsection