<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    private $Berita;
    private $Kategori;
    public function __construct() {
        $this->Berita = new Berita();
        $this->Kategori = new Kategori();
    }

    public function index() {
        $data = [
            'berita' => $this->Berita->TampilData()
        ];

        return view('Berita.index', $data);
    }

    public function detail($id) {
        $data = [
            'berita' => $this->Berita->DetailData($id)
        ];
        return view('berita.detail', $data);
    }

    public function tambah() {
        $data = [
            'Kategori'=>$this->Kategori->TampilData()
        ];
        return view('Berita.tambah', $data);
    }

    public function insert() {
        Request()->validate([
            'judul' => 'required',
            'id_kategori' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg'
        ], [
            'judul.required' => 'judul tidak boleh kosong',
            'id_kategori.required' => 'nama kategori wajib isi',
            'isi.required' => 'isi tidak boleh kosong',
            'tanggal.required' => 'tanggal tidak boleh kosong',
            'gambar.required' => 'gambar tidak boleh kosong',
            'gambar.mimes' => 'gambar harus berupa png, jpg, jpeg'
        ]);

        $file = Request()->gambar;
        $fileName = time().'.'.$file->extension();
        $file->move(public_path('foto'), $fileName);

        $data = [
            'judul' => Request()->judul,
            'id_kategori' => Request()->id_kategori,
            'isi' => Request()->isi,
            'tanggal'=> Request()->tanggal,
            'gambar'=> $fileName
        ];

        $this->Berita->TambahData($data);
        return redirect()->route('berita')->with('success', 'Data berhasil Ditambah');
    }

    public function edit($id){
        $data = [
            'berita' => $this->Berita->DetailData($id),
            'Kategori'=>$this->Kategori->TampilData()
        ];
        return view('Berita.edit', $data);
    }

    public function update($id){
        Request()->validate([
            'judul' => 'required',
            'id_kategori' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg'
        ], [
            'judul.required' => 'judul tidak boleh kosong',
            'id_kategori.required' => 'nama kategori wajib diisi',
            'isi.required' => 'isi tidak boleh kosong',
            'tanggal.required' => 'tanggal tidak boleh kosong',
            'gambar.mimes' => 'gambar harus berupa png, jpg, jpeg'
        ]);

        if (!empty(Request()->gambar)) {

            $file = Request()->gambar;
            $fileName = time().'.'.$file->extension();
            $file->move(public_path('foto'), $fileName);

            $data = [
                'judul' => Request()->judul,
                'id_kategori' => Request()->id_kategori,
                'isi' => Request()->isi,
                'tanggal'=> Request()->tanggal,
                'gambar'=> $fileName
            ];
        } else {
            $data = [
                'judul' => Request()->judul,
                'id_kategori' => Request()->id_kategori,
                'isi' => Request()->isi,
                'tanggal'=> Request()->tanggal,
            ];
        }

        $this->Berita->EditData($id, $data);
        return redirect()->route('berita')->with('success', 'Data berhasil Diupdate');
    }

    public function delete($id) {

        $berita = $this->Berita->DetailData($id);
        if(!empty($berita->gambar)) {
            unlink(public_path('foto/'.$berita->gambar));
        }

        $this->Berita->HapusData($id);
        return redirect()->route('berita')->with('success', 'Data berhasil Dihapus');
    }

}
