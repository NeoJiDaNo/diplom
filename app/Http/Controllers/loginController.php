<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request){

        if (Auth::check()){
            return redirect()->intended(route('reg.home'));
        }

        $formFields = $request->only(['login', 'password']);

        if (Auth::attempt($formFields)){
            return redirect()->intended(route('reg.home'));
        }

        return redirect(route('reg.login'))->withErrors([
            'login' => 'Не верный ЛОГИН или ПАРОЛЬ'
        ]);

    }
}
