<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'kategori' => DB::table('kategoris')->count(),
            'berita' => DB::table('beritas')->count(),
            'user' => DB::table('users')->count(),
        ];
        return view('Home.index', $data);
    }
}
