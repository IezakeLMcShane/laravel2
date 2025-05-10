@extends('layouts.app')

@section('content')
    <h1>Сотрудники: зарплата 400-800 или программисты</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Должность</th>
                <th>Зарплата</th>
                <th>Дата рождения</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->salary }}</td>
                    <td>{{ $employee->birthday}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection