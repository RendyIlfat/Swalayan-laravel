<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\User;

class AuthController extends Controller
{
    function showLogin()
    {
        return view('login');
    }

    function actionLogin(Request $req)
    {
        $dataLogin = [
            'email' => $req->input('email'),
            'password' => $req->input('password'),
        ];

        if (Auth::attempt($dataLogin)) {
            return redirect('/');
        } else {
            return back();
            // return redirect('login);
        }
    }

    function actionLogout()
    {
        Auth::logout();

        return redirect('login');
    }

    function generateData()
    {
        User::create([
            'name' => 'RendyIlfat',
            'email' => 'rendyilfat@gmail.com',
            'email_verified_at' => now(),
            'password' => '9999',
            'remember_token' => Str::random(10),
        ]);
    }
}
