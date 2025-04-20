<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Показывает форму создания пользователя
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Добавляет нового пользователя в БД (используя Query Builder)
     */
    public function insert(Request $request)
    {
        // Валидация данных
        $validator = Validator::make($request->all(), [
            'login' => 'required|string|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Вставка данных с помощью Query Builder
        $inserted = DB::table('users')->insert([
            'login' => $request->login,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($inserted) {
            return redirect()->route('users.index')
                ->with('success', 'Пользователь успешно создан!');
        }

        return redirect()->back()
            ->with('error', 'Ошибка при создании пользователя');
    }
}