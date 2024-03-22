<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Berita extends Model
{
    public function TampilData(){
        return DB::table('beritas')
        ->select('*', 'beritas.id as id')
        ->join('kategoris', 'beritas.id_kategori', 'kategoris.id')
        ->get();
    }

    public function DetailData($id){
        return DB::table('beritas')
        ->select('*', 'beritas.id as id')
        ->join('kategoris', 'beritas.id_kategori', 'kategoris.id')
        ->where('beritas.id', $id)
        ->first();
    }

    public function TambahData($data) {
        DB::table('beritas')->insert($data);
    }

    public function EditData($id, $data){
        DB::table('beritas')->where('id', $id)->update($data);
    }

    public function HapusData($id){
        DB::table('beritas')->where('id', $id)->delete();
    }
}
