@extends('layouts.app')

@section('content')
    <h1>Зарплаты по должностям</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Должность</th>
                <th>Суммарная зарплата</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salaries as $salary)
                <tr>
                    <td>{{ $salary->position }}</td>
                    <td>{{ $salary->total_salary }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection