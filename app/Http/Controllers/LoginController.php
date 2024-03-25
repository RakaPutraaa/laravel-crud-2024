<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view('Login.login');
    }

    // public function login() {
    //     $validasi = Request()->validate([
    //         'email'=>'required',
    //         'password'=>'required'
    //     ], [
    //         'email.required'=>'Email wajib diisi !!!',
    //         'password.required'=>'Password wajib diisi !!!'
    //     ]);

    //     // dd($validasi);

    //     if(!Auth::attempt($validasi)) {
    //         return redirect()->back()->with('error', 'Log In Gagal');
    //     }

    //     Request()->session()->regenerate();
    //     return redirect()->route('home')->with('success', 'Log In Berhasil');
    // }

    public function login()
    {
        $validasi = Request()->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        if(!Auth::attempt($validasi)) return redirect()->back()->with('error', 'Log In Gagal');
        Request()->session()->regenerate();
        return redirect()->route('home')->with('success', 'Log In Berhasil');
    }

    public function logout() {
        Auth::logout();
        Request()->session()->invalidate();
        return redirect('/');
    }

    public function register() {
        return view('Login.register');
    }

    public function prosesRegister() {
        Request()->validate([
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required'
        ], [
            'name.required'=>'Nama Wajib Diisi !!!',
            'email.required'=>'Email Wajib Diisi',
            'email.unique'=>'Email Telah Terdaftar',
            'password.required'=>'Password Wajib Diisi'
        ]);

        $data = [
            'name'=> Request()->name,
            'email'=> Request()->email,
            'password'=> Hash::make(Request()->password)
        ];

        DB::table('users')->insert($data);

        return redirect()->route('login')->with('success', 'Data Berhasil Tersimpan');
    }
}
