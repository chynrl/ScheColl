<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function actionregister(Request $request){
        if ($request->role=='admin'){
            if($request->kode_akses_admin!=1234){
                $request->session()->flash('error', 'Kode akses admin salah');
                return redirect(route('register'))
                    ->withInput();
            }
        }

        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        $request->session()->flash('message', 'Register Berhasil. Akun Anda Telah Aktif, Silahkan Lakukan Login');
        return redirect (route('login'));
    }
}
