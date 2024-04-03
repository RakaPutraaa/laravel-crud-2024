<?php

namespace App\Http\Controllers;

use App\Models\kat_pelatihan;
use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    private $pelatihan;
    private $kat_pelatihan;
    public function __construct() {
        $this->pelatihan = new Pelatihan();
        $this->kat_pelatihan = new kat_pelatihan();
    }

    public function index() {

        $data = [
            'pelatihan' => $this->pelatihan->TampilData(),
        ];
        return view('Pelatihan.index', $data);
    }

    public function tambah(){
        $data = [
            'kat_pelatihan'=>$this->kat_pelatihan->TampilData()
        ];
        return view('Pelatihan.tambah', $data);
    }

    public function insert() {
        Request()->validate([
            'kategori_pelatihan'=> 'required',
            'judul'=> 'required',
            'tanggal'=> 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg',
            'deskripsi' => 'required'
        ], [
            'kategori_pelatihan.required'=>'Kategori tidak boleh kosong',
            'judul.required' => 'judul tidak boleh kosong',
            'tanggal.required' => 'tanggal tidak boleh kosong',
            'gambar.required' => 'gambar tidak boleh kosong',
            'gambar.mimes' => 'gambar harus berupa png, jpg, jpeg',
            'deskripsi' => 'deskripsi tidak boleh kosong'
        ]);

        $file = Request()->gambar;
        $fileName = time().'.'.$file->extension();
        $file->move(public_path('foto'), $fileName);

        $data = [
            'id_kat_pelatihan'=>Request()->kategori_pelatihan,
            'nama_pelatihan'=>Request()->judul,
            'tanggal_pelatihan'=>Request()->tanggal,
            'gambar_pelatihan'=>$fileName,
            'deskripsi'=>Request()->deskripsi
        ];

        $this->pelatihan->TambahData($data);
        return redirect()->route('pelatihan')->with('success', 'Data berhasil Ditambah');
    }

    public function edit($id) {
        $data = [
            'pelatihan' => $this->pelatihan->DetailData($id),
            'kat_pelatihan'=> $this->kat_pelatihan->TampilData()
        ];
        return view('Pelatihan.edit', $data);
    }

    public function update($id) {
        Request()->validate([
            'kategori_pelatihan'=> 'required',
            'judul'=> 'required',
            'tanggal'=> 'required',
            'gambar' => 'mimes:png,jpg,jpeg',
            'deskripsi' => 'required'
        ], [
            'kategori_pelatihan.required'=>'Kategori tidak boleh kosong',
            'judul.required' => 'judul tidak boleh kosong',
            'tanggal.required' => 'tanggal tidak boleh kosong',
            'gambar.mimes' => 'gambar harus berupa png, jpg, jpeg',
            'deskripsi' => 'deskripsi tidak boleh kosong'
        ]);

        if(!empty(Request()->gambar)){

            $file = Request()->gambar;
            $fileName = time().'.'.$file->extension();
            $file->move(public_path('foto'), $fileName);

            $data = [
                'id_kat_pelatihan'=>Request()->kategori_pelatihan,
                'nama_pelatihan'=>Request()->judul,
                'tanggal_pelatihan'=>Request()->tanggal,
                'gambar_pelatihan'=>$fileName,
                'deskripsi'=>Request()->deskripsi
            ];
        } else {
            $data = [
                'nama_pelatihan'=>Request()->judul,
                'tanggal_pelatihan'=>Request()->tanggal,
                'deskripsi'=>Request()->deskripsi
            ];
        }


        $this->pelatihan->EditData($id, $data);
        return redirect()->route('pelatihan')->with('success', 'Data berhasil Diupdate');
    }

    public function delete($id) {
        $pelatihan = $this->pelatihan->DetailData($id);
        if (!empty($pelatihan->gambar)) {
            unlink(public_path('foto/'.$pelatihan->gambar));
        }

        $this->pelatihan->HapusData($id);
        return redirect()->route('pelatihan')->with('success', 'Data berhasil Dihapus');

    }


}
