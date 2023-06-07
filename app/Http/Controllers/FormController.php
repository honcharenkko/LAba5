<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Получение данных из POST-запроса
        $name = $request->input('name');
        $email = $request->input('email');

    }
}
