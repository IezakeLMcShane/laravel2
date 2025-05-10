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
    return view('users.create-multiple');
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

public function storeMultiple(Request $request) {
    // Валидация для 3 пользователей
    for ($i = 1; $i <= 3; $i++) {
        $request->validate([
            "login.$i" => 'required|unique:users',
            "password.$i" => 'required|min:6',
            "email.$i" => 'required|email|unique:users'
        ]);
    }

    for ($i = 1; $i <= 3; $i++) {
        User::create([
            'login' => $request->input("login.$i"),
            'password' => $request->input("password.$i"),
            'email' => $request->input("email.$i")
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