<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kategori extends Model
{
    public function TampilData() {
        return DB::table('kategoris')->get();
    }

    public function DetailData($id) {
        return DB::table('Kategoris')->where('id',$id)->first();
    }

    public function TambahData($data) {
        DB::table('Kategoris')->insert($data);
    }

    public function EditData($id, $data) {
        DB::table('Kategoris')->where('id', $id)->update($data);
    }

    public function HapusData($id) {
        DB::table('Kategoris')->where('id', $id)->delete();
    }
}
