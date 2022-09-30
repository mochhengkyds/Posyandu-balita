<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class danak extends Model
{

    public function showData()
    {
        return DB::table('anak')->get();
    }
    public function addData($data)
    {
        return DB::table('anak')->insert($data);
    }
    public function detailData($id)
    {
        return DB::table('anak')->where('id', $id)->first();
    }
    public function editData($id, $data)
    {
        return DB::table('anak')->where('id', $id)->update($data);
    }
    public function deleteData($id)
    {
        return DB::table('anak')->where('id', $id)->delete();
    }
}
