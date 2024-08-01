<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class AuthenticationController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $request->validate([
            'email' => ['required','string','email','min:2','max:255'],
            'password' => ['required', 'string', Password::default()],
        ]);

        if(Auth::attempt($data, $request->input('remember'))){
            Session::flash('success',[
                'title' => 'Berhasil.',
                'message' => 'Anda berhasil masuk ke aplikasi.',
            ]);

            return redirect()->route('home.backend');
        }else{
            Session::flash('danger',[
                'title' => 'Gagal.',
                'message' => 'Ada yang salah, cek kembali data login anda.',
            ]);

            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();

        Session::flash('success',[
            'title' => 'Berhasil.',
            'message' => 'Anda berhasil keluar dari aplikasi.',
        ]);

        return redirect()->route('home.frontend');
    }
}
