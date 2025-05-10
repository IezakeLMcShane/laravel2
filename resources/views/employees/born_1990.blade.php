@extends('layouts.app')

@section('content')
    <h1>Сотрудники 1990 года рождения</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Имя</th>
                <th>Должность</th>
                <th>Дата рождения</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->birthday }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">Нет сотрудников 1990 года рождения</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection