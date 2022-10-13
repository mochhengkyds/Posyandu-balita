<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Panak extends Model
{
    public function showData()
    {
        return DB::table('anak_priksa')->get();
    }
    public function addData($data)
    {
        return DB::table('anak_priksa')->insert($data);
    }
    public function detailData($id)
    {
        return DB::table('anak_priksa')->where('id', $id)->first();
    }
    public function editData($id, $data)
    {
        return DB::table('anak_priksa')->where('id', $id)->update($data);
    }
    public function deleteData($id)
    {
        return DB::table('anak_priksa')->where('id', $id)->delete();
    }
}
