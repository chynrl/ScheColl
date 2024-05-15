<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function actionregister(Request $request){
        $user = User::create([
            'email' =>$request->email,
            'username' =>$request->username,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'active' => 1
        ]);
        Session:: flash('massage', 'Registerr Berhasil. Akun Anda Telah Aktif, Silahkan Lakukan Login');
        return redirect('register');
    }
}
