<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class bidan extends Model
{
    public function showData()
    {
        return DB::table('users')->where('role', 'bidan')->get();
    }

    public function addData($data)
    {
        return DB::table('users')->insert($data);
    }

    public function detailData($id)
    {
        return DB::table('users')->where('id', $id)->first();
    }

    public function editData($id, $data)
    {
        return DB::table('users')->where('id', $id)->update($data);
    }

    public function deleteData($id)
    {
        return DB::table('users')->where('id', $id)->delete();
    }
}
