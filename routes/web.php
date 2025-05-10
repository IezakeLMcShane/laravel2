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
Route::get('/employees/filtered400-800', [EmployeeController::class, 'filteredEmployees']);
Route::get('/employees/name/{id}', [EmployeeController::class, 'getName']);
Route::get('/employees/birthday-25', [EmployeeController::class, 'birthday25']);
Route::get('/employees/complex-filter', [EmployeeController::class, 'complexFilter']);
Route::get('/employees/total-salary', [EmployeeController::class, 'totalSalary'])->name('employees.total_salary');
Route::get('/employees/salary-by-position', [EmployeeController::class, 'salaryByPosition']);
Route::get('/employees/born-1990', [EmployeeController::class, 'bornIn1990']);
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');


Route::get('/', [IndexController::class, 'index']);

Route::get('/users/create', [UserController::class, 'create'])
     ->name('users.create');

// Обработка формы

Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/insert', [UserController::class, 'store'])->name('users.insert');

//Route::get('/user/create-many', [UserController::class, 'createMultiple'])->name('users.create_many');
//Route::post('/user/insert-many', [UserController::class, 'storeMultiple'])->name('users.insert_many');

Route::get('/users/create_many', [UserController::class, 'createMultiple'])->name('users.create_many');
Route::post('/users/store_many', [UserController::class, 'storeMultiple'])->name('users.insert_many');
Route::resource('users', UserController::class);
Route::post('/users/store-many', [UserController::class, 'storeMany'])
    ->name('users.store_many'); // или 'users.store-many'