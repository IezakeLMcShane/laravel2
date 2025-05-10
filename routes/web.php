<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\userssController;
use App\Http\Controllers\ApiDataController;
use App\Http\Controllers\IndexController;


// Показ формы создания пользователя

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/filtered', [EmployeeController::class, 'filtered']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::get('/employees/name/{id}', [EmployeeController::class, 'getName']);
Route::get('/employees/complex-filter', [EmployeeController::class, 'complexFilter']);
Route::get('/employees/total-salary', [EmployeeController::class, 'totalSalary']);
Route::get('/employees/salary-by-position', [EmployeeController::class, 'salaryByPosition']);
Route::get('/employees/birthday-25', [EmployeeController::class, 'birthday25']);
Route::get('/employees/born-1990', [EmployeeController::class, 'bornIn1990']);
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');


Route::get('/', [IndexController::class, 'index']);

Route::get('/users/create', [UserController::class, 'create'])
     ->name('users.create');

// Обработка формы
Route::post('/users/insert', [UserController::class, 'insert'])
     ->name('users.insert');


Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/insert', [UserController::class, 'insert'])->name('users.insert');

Route::get('/user/create-many', [UserController::class, 'createMany'])->name('users.create_many');
Route::post('/user/insert-many', [UserController::class, 'insertMany'])->name('users.insert_many');