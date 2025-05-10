<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    <h1>Работник с ID {{ $employee->id }} </h1>
    <table>
    <h2>{{ $employee->name }}</h2>
    <p>Должность: {{ $employee->position }}</p>
    <p>Зарплата: {{ $employee->salary }}</p>
    <p>Дата рождения: {{ $employee->birthday}}</p>
    <a href="{{ route('employees.index') }}">Назад к списку</a>
    </table>
@endsection