<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <h1>Все работники (сортировка по зарплате)</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Дата рождения</th>
            <th>Должность</th>
            <th>Зарплата</th>
        </tr>
        @foreach($employees as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->birthday }}</td>
            <td>{{ $employee->position }}</td>
            <td>{{ $employee->salary }}</td>
        </tr>
        @endforeach
    </table>
@endsection