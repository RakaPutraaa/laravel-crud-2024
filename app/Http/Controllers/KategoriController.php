<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public $Kategori;
    public function __construct(){
        $this->Kategori = new Kategori();
    }
    public function index() {
        $data = [
            'kategori' => $this->Kategori->TampilData()
        ];
        return view('Kategori.index', $data);
    }

    public function tambah() {
        return view('Kategori.tambah');
    }

    public function insert() {
        Request()->validate([
            'nama_kategori' => 'required|unique:kategoris,nama_kategori'
        ], [
            'nama_kategori.required' => 'Nama Kategori harus diisi',
            'nama_kategori.unique' => 'Nama Kategori harus berbeda',
        ]);
        $data = [
            'nama_kategori' => Request()->nama_kategori,
        ];
        $this->Kategori->TambahData($data);
        return redirect()->route('kategori')->with('success', 'Data berhasil Disimpan');
    }

    public function edit($id) {

        $data = [
            'kategori' => $this->Kategori->DetailData($id)
        ];
        return view('Kategori.edit', $data);
    }

    public function update($id) {
        Request()->validate([
            'nama_kategori' => 'required'
        ], [
            'nama_kategori.required' => 'Nama Kategori harus diisi',
        ]);
        $data = [
            'nama_kategori' => Request()->nama_kategori,
        ];
        $this->Kategori->EditData($id, $data);
        return redirect()->route('kategori')->with('success', 'Data berhasil Diupdate');
    }

    public function delete($id) {
        $this->Kategori->HapusData($id);
        return redirect()->route('kategori')->with('success', 'Data berhasil Dihapus');
    }
}
