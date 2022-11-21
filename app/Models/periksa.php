<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class periksa extends Model
{
    protected $table = 'pemeriksaan';

    public function showData()
    {
        return DB::table('pemeriksaan')->join('pasien', 'pasien.id', 'pemeriksaan.id_pasien')->get();
    }
    public function addData($data)
    {
        return DB::table('pemeriksaan')->insert($data);
    }

    public function detailData($id)
    {
        return DB::table('pemeriksaan')->where('id', $id)->first();
    }

    public function editData($id, $data)
    {
        return DB::table('pemeriksaan')->where('id', $id)->update($data);
    }

    public function deleteData($id)
    {
        return DB::table('pemeriksaan')->where('id', $id)->delete();
    }
}
