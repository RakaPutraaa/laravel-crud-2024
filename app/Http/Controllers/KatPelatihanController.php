<?php

namespace App\Http\Controllers;

use App\Models\kat_pelatihan;
use Illuminate\Http\Request;

class KatPelatihanController extends Controller
{
    private $kat_pelatihan;
    public function __construct() {
        $this->kat_pelatihan = new kat_pelatihan;
    }

    public function index() {
        $data = [
            'kat_pelatihan' => $this->kat_pelatihan->TampilData()
        ];
        return view('KategoriPelatihan.index', $data);
    }

    public function tambah() {
        return view('KategoriPelatihan.tambah');
    }

    public function insert() {
        Request()->validate([
            'kategori_pelatihan'=>'required',
            'jam_pelatihan'=>'required'
        ], [
            'kategori_pelatihan.required'=>'Kategori tidak boleh kosong',
            'jam_kategori.required'=>'Jam tidak boleh kosong'
        ]);

        $data = [
            'kategori_pelatihan' => Request()->kategori_pelatihan,
            'jam_pelatihan' => Request()->jam_pelatihan
        ];

        $this->kat_pelatihan->TambahData($data);
        return redirect()->route('kategori-pelatihan-home');
    }

    public function edit($id) {
        $data = [
            'kat_pelatihan' => $this->kat_pelatihan->DetailData($id)
        ];
        return view('KategoriPelatihan.edit', $data);
    }

    public function update($id) {
        Request()->validate([
            'kategori_pelatihan'=>'required',
            'jam_pelatihan'=>'required'
        ], [
            'kategori_pelatihan.required'=>'Kategori tidak boleh kosong',
            'jam_kategori.required'=>'Jam tidak boleh kosong'
        ]);

        $data = [
            'kategori_pelatihan' => Request()->kategori_pelatihan,
            'jam_pelatihan' => Request()->jam_pelatihan
        ];

        $this->kat_pelatihan->EditData($id, $data);
        return redirect()->route('kategori-pelatihan-home');
    }

    public function delete($id) {
        $this->kat_pelatihan->DeleteData($id);
        return redirect()->route('kategori-pelatihan-home');
    }
}
