<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelatihan extends Model
{
    public function TampilData() {
        return DB::table('pelatihans')
        ->select('*', 'pelatihans.id as id')
        ->join('kat_pelatihans', 'pelatihans.id_kat_pelatihan', 'kat_pelatihans.id')
        ->get();
    }

    public function DetailData($id) {
        return DB::table('pelatihans')
        ->select('*', 'pelatihans.id as id')
        ->join('kat_pelatihans', 'pelatihans.id_kat_pelatihan', 'kat_pelatihans.id')
        ->where('pelatihans.id', $id)->first();
    }

    public function TambahData($data) {
        DB::table('pelatihans')->insert($data);
    }

    public function EditData($id, $data) {
        DB::table('pelatihans')->where('id', $id)->update($data);
    }

    public function HapusData($id) {
        DB::table('pelatihans')->where('id', $id)->delete();
    }
}
