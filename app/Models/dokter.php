<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class dokter extends Model
{
    public function showData()
    {
        return DB::table('dokter')->get();
    }
    public function addData($data)
    {
        return DB::table('dokter')->insert($data);
    }
    public function detailData($id)
    {
        return DB::table('dokter')->where('id', $id)->first();
    }
    public function editData($id, $data)
    {
        return DB::table('dokter')->where('id', $id)->update($data);
    }
    public function deleteData($id)
    {
        return DB::table('dokter')->where('id', $id)->delete();
    }
}
