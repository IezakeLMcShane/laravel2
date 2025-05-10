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
    public function insert(InsertUserRequest $request)
    {
        $data = $request->validated();
        #dd($data);
        $id=User::create ([
            'login' => $data['login'],
            'password' => Hash::make( $data['password']),
            'email' => $data['email'],
        ]);

        if ($id) {
            return redirect()->route('users.create')
                ->with('success', 'Пользователь успешно создан!');
        }

        return redirect()->back()
            ->with('error', 'Ошибка при создании пользователя');

    }

    public function createMany()
    {
        return view('users.create_many');
    }
    public function insertMany(Request $request)
     { 
        dd($request->all());
    }
}

