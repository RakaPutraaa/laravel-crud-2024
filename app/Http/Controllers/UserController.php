<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $data = [
            'user' => DB::table('users')->where('level', 'admin')->get()
        ];
        return view('User.index', $data);
    }

    public function tambah() {
        return view('User.tambah');
    }

    public function insert() {
        Request()->validate([
            'name_user' => 'required',
            'email_user' => 'required|unique:users,email',
            'password_user' => 'required'
        ], [
            'name_user.required'=>'Nama Tidak boleh kosong',
            'email_iser.required' => 'Email tidak boleh kosong',
            'email_iser.unique' => 'Email sudah terdaftar',
            'password_user.required'=> 'Password tidak boleh kosong'
        ]);

        $data = [
            'name'=>Request()->name_user,
            'email'=>Request()->email_user,
            'password'=> Hash::make(Request()->password_user)
        ];
        DB::table('users')->insert($data);
        return redirect()->route('user')->with('success', ' Data berhasil disimpan');
    }

    public function edit($id) {
        $data = [
            'user'=>DB::table('users')->where('id', $id)->first()
        ];
        return view('User.edit', $data);
    }

    public function update($id) {
        Request()->validate([
            'name_user' => 'required',
            'email_user' => 'required',
        ], [
            'name_user.required'=>'Nama Tidak boleh kosong',
            'email_iser.required' => 'Email tidak boleh kosong',
        ]);

        if(!empty(Request()->password)){
            $data = [
                'name'=>Request()->name_user,
                'email'=>Request()->email_user,
                'password'=> Hash::make(Request()->password_user)
            ];
        } else {

            $data = [
                'name'=>Request()->name_user,
                'email'=>Request()->email_user,
            ];
        }

        DB::table('users')->where('id', $id)->update($data);
        return redirect()->route('user')->with('success', ' Data berhasil diedit');
    }

    public function delete($id) {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('user')->with('success', 'Data berhasil dihapus');
    }
}
