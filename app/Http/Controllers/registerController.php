<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class registerController extends Controller
{
    public function save(Request $request) {
        if (Auth::check()){
            return redirect(route('reg.home'));
        }
        $validateFields = $request->validate([
            'login' => 'required|min:4',
            'email'=> 'required|email',
            'password' => 'required|min:8'
        ]);
        if(User::where('email', $validateFields['email'])->exists()){
            return redirect(route('reg.registration'))->withErrors([
                'email' => 'Пользователь с таким email существует'
            ]);
        }
        $user = User::create($validateFields);
        if ($user) {
            Auth::login($user);
            return redirect(route('reg.home'));
        }
        return redirect(route('reg.login'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);

    }
}
