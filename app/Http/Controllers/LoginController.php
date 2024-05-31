<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;



class LoginController extends Controller
{
    public function login()
    {
        if (auth()->check()) {
            return redirect('home');
        }
        return view('login');
        
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect(route('home'));
        }else{
            Session::flash('error', 'Email dan Password tidak sesuai');
        return redirect(route('login'));
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
