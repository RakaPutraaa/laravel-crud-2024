<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelatihan extends Model
{
    public function TampilData() {
        return DB::table('pelatihans')->get();
    }

    public function DetailData($id) {
        return DB::table('pelatihans')->where('id', $id)->first();
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
