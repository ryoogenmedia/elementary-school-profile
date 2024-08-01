<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            session()->flash('alert', [
                'type' => 'success',
                'message' => 'Berhasil.',
                'detail' => "ada berhasil masuk ke aplikasi.",
            ]);

            return redirect()->route('home.backend');
        }else{
            session()->flash('alert', [
                'type' => 'danger',
                'message' => 'Gagal.',
                'detail' => "ada yang salah, periksa kembali data login anda.",
            ]);

            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();

        session()->flash('alert', [
            'type' => 'success',
            'message' => 'Berhasil.',
            'detail' => "anda berhasil keluar dari aplikasi.",
        ]);

        return redirect()->route('home.frontend');
    }
}
