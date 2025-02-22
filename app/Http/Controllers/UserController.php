<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id = 0)
    {
        // $id будет равен 0, если параметр не передан
        return response()->json([
            'user_id' => $id
        ]);
    }
}