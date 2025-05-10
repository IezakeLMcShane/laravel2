<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertUserRequest;
use GuzzleHttp\Promise\Create;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller{
public function index() {
    $users = User::all();
    return view('users.index', compact('users'));
}

public function create() {
    return view('users.create');
}

public function createMultiple() {
    return view('users.create_many');
}

public function store(Request $request) {
    $data = $request->validate([
        'login' => 'required|unique:users',
        'password' => 'required|min:6',
        'email' => 'required|email|unique:users'
    ]);
    
    User::create($data);
    return redirect()->route('users.index');
}
public function storeMany(Request $request)
{
    // Валидация для 3 пользователей
    $request->validate([
        'login' => 'required|array|size:3', // Проверяем, что login — массив из 3 элементов
        'password' => 'required|array|size:3',
        'email' => 'required|array|size:3',

    ]);

    // Создание пользователей
    foreach ($request->login as $index => $login) {
        User::create([
            'login' => $login,
            'password' => $request->password[$index],
            'email' => $request->email[$index],
        ]);
    }
    return redirect()->route('users.index');
}
public function edit(User $user) {
    return view('users.edit', compact('user'));
}

public function update(Request $request, User $user) {
    $data = $request->validate([
        'login' => 'required|unique:users,login,'.$user->id,
        'email' => 'required|email|unique:users,email,'.$user->id,
        'password' => 'sometimes|min:6'
    ]);
    
    $user->update($data);
    return redirect()->route('users.index');
}

public function destroy(User $user) {
    $user->delete();
    return redirect()->route('users.index');
}
}