<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view ('auth/login');
    }

    public function loginPost(request $request){
        $request->validate([
            'email'     => 'required',
            'password'  => 'required|min:8',
        ],[
            'email.required'    => 'email tidak boleh kosong',
            'password.required' => 'password tidak boleh kosong',
            'password.min' => 'password minimal 8 karakter',
        ]);

        $data = array(
            'email'     => $request->email,
            'password'  => $request->password,
        );

        if (Auth::attempt($data)){
            return redirect()->route('dashboard')->with('success','Anda berhasil login');
        } else {
            return redirect()->back()->with('failed', 'email atau password salah');
        }
        
    }
    public function logout(){
        Auth::logout();

        return redirect()->route('login')->with('success', 'Anda berhasil logout');
    }
}
