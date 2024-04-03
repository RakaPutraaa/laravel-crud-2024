<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kat_pelatihan extends Model
{
    public function TampilData() {
        return DB::table('kat_pelatihans')->get();
    }

    public function DetailData($id) {
        return DB::table('kat_pelatihans')->where('id', $id)->first();
    }

    public function TambahData($data) {
        DB::table('kat_pelatihans')->insert($data);
    }

    public function EditData($id, $data){
        DB::table('kat_pelatihans')->where('id', $id)->update($data);
    }

    public function DeleteData($id) {
        DB::table('kat_pelatihans')->where('id', $id)->delete();
    }
}
