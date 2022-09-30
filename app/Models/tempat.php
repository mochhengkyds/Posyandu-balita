<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class tempat extends Model
{
    public function showData()
    {
        return DB::table('tempat')->get();
    }
    public function addData($data)
    {
        return DB::table('tempat')->insert($data);
    }
    public function detailData($id)
    {
        return DB::table('tempat')->where('id', $id)->first();
    }
}
