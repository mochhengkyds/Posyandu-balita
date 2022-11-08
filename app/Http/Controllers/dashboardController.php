<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index()
    {
        $jumblah_bidan = DB::table('users')->count();
        return view('/dashboard', compact('jumblah_bidan'));
    }
}
