<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index()
    {
        $jumblah_bidan = DB::table('users')->count();
        $jumblah_pasien = DB::table('pasien')->count();

        $jml_pasien_jan = DB::table('pasien')->whereMonth('tanggal_daftar', '01')->count();
        $jml_pasien_feb = DB::table('pasien')->whereMonth('tanggal_daftar', '02')->count();
        $jml_pasien_mar = DB::table('pasien')->whereMonth('tanggal_daftar', '03')->count();
        $jml_pasien_apr = DB::table('pasien')->whereMonth('tanggal_daftar', '04')->count();
        $jml_pasien_mei = DB::table('pasien')->whereMonth('tanggal_daftar', '05')->count();
        $jml_pasien_jun = DB::table('pasien')->whereMonth('tanggal_daftar', '06')->count();
        $jml_pasien_jul = DB::table('pasien')->whereMonth('tanggal_daftar', '07')->count();
        $jml_pasien_agu = DB::table('pasien')->whereMonth('tanggal_daftar', '08')->count();
        $jml_pasien_sep = DB::table('pasien')->whereMonth('tanggal_daftar', '09')->count();
        $jml_pasien_okt = DB::table('pasien')->whereMonth('tanggal_daftar', '10')->count();
        $jml_pasien_nov = DB::table('pasien')->whereMonth('tanggal_daftar', '11')->count();
        $jml_pasien_des = DB::table('pasien')->whereMonth('tanggal_daftar', '12')->count();

        return view('/dashboard', compact(
            'jumblah_bidan',
            'jumblah_pasien',
            //chart data
            'jml_pasien_jan',
            'jml_pasien_feb',
            'jml_pasien_mar',
            'jml_pasien_apr',
            'jml_pasien_mei',
            'jml_pasien_jun',
            'jml_pasien_jul',
            'jml_pasien_agu',
            'jml_pasien_sep',
            'jml_pasien_okt',
            'jml_pasien_nov',
            'jml_pasien_des'
        ));
    }
}
