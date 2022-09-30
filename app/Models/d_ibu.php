<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class d_ibu extends Model
{
    public function showData()
    {
        return DB::table('ibu')->get();
    }
    public function addData($data)
    {
        return DB::table('ibu')->insert($data);
    }
    public function detailData($id)
    {
        return DB::table('ibu')->where('id', $id)->first();
    }
    public function editData($id, $data)
    {
        return DB::table('ibu')->where('id', $id)->update($data);
    }
    public function deleteData($id)
    {
        return DB::table('ibu')->where('id', $id)->delete();
    }
}
