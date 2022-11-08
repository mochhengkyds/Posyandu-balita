<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pasien extends Model
{
    public function showData()
    {
        return DB::table('pasien')->get();
    }
    public function addData($data)
    {
        return DB::table('pasien')->insert($data);
    }

    public function detailData($id)
    {
        return DB::table('pasien')->where('id', $id)->first();
    }

    public function editData($id, $data)
    {
        return DB::table('pasien')->where('id', $id)->update($data);
    }

    public function deleteData($id)
    {
        return DB::table('pasien')->where('id', $id)->delete();
    }
}
