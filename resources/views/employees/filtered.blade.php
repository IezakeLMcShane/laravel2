@extends('layouts.app')

@section('content')
    <h1>Фильтрованные сотрудники (зарплата 400 или ID > 4)</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Должность</th>
                <th>Зарплата</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->salary }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
