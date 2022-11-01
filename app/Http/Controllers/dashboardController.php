<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index()
    {
        $jumblah_anak = DB::table('anak')->count();
        $jumblah_ibu = DB::table('ibu')->count();
        $jumblah_bidan = DB::table('users')->count();
        $jumblah_dokter = DB::table('dokter')->count();

        //chart
        $jml_anak_jan = DB::table('anak')->whereMonth('tgl_df', '01')->count();
        $jml_anak_feb = DB::table('anak')->whereMonth('tgl_df', '02')->count();
        $jml_anak_mar = DB::table('anak')->whereMonth('tgl_df', '03')->count();
        $jml_anak_apr = DB::table('anak')->whereMonth('tgl_df', '04')->count();
        $jml_anak_mei = DB::table('anak')->whereMonth('tgl_df', '05')->count();
        $jml_anak_jun = DB::table('anak')->whereMonth('tgl_df', '06')->count();
        $jml_anak_jul = DB::table('anak')->whereMonth('tgl_df', '07')->count();
        $jml_anak_aug = DB::table('anak')->whereMonth('tgl_df', '08')->count();
        $jml_anak_sep = DB::table('anak')->whereMonth('tgl_df', '09')->count();
        $jml_anak_okt = DB::table('anak')->whereMonth('tgl_df', '10')->count();
        $jml_anak_nov = DB::table('anak')->whereMonth('tgl_df', '11')->count();
        $jml_anak_des = DB::table('anak')->whereMonth('tgl_df', '12')->count();

        $jml_ibu_jan = DB::table('ibu')->whereMonth('tgl_df', '01')->count();
        $jml_ibu_feb = DB::table('ibu')->whereMonth('tgl_df', '02')->count();
        $jml_ibu_mar = DB::table('ibu')->whereMonth('tgl_df', '03')->count();
        $jml_ibu_apr = DB::table('ibu')->whereMonth('tgl_df', '04')->count();
        $jml_ibu_mei = DB::table('ibu')->whereMonth('tgl_df', '05')->count();
        $jml_ibu_jun = DB::table('ibu')->whereMonth('tgl_df', '06')->count();
        $jml_ibu_jul = DB::table('ibu')->whereMonth('tgl_df', '07')->count();
        $jml_ibu_aug = DB::table('ibu')->whereMonth('tgl_df', '08')->count();
        $jml_ibu_sep = DB::table('ibu')->whereMonth('tgl_df', '09')->count();
        $jml_ibu_okt = DB::table('ibu')->whereMonth('tgl_df', '10')->count();
        $jml_ibu_nov = DB::table('ibu')->whereMonth('tgl_df', '11')->count();
        $jml_ibu_des = DB::table('ibu')->whereMonth('tgl_df', '12')->count();



        return view('dashboard',
        compact(
            'jumblah_anak',
            'jumblah_ibu',
            'jumblah_bidan',
            'jumblah_dokter',

            'jml_anak_jan',
            'jml_anak_feb',
            'jml_anak_mar',
            'jml_anak_apr',
            'jml_anak_mei',
            'jml_anak_jun',
            'jml_anak_jul',
            'jml_anak_aug',
            'jml_anak_sep',
            'jml_anak_okt',
            'jml_anak_nov',
            'jml_anak_des',

            'jml_ibu_jan',
            'jml_ibu_feb',
            'jml_ibu_mar',
            'jml_ibu_apr',
            'jml_ibu_mei',
            'jml_ibu_jun',
            'jml_ibu_jul',
            'jml_ibu_aug',
            'jml_ibu_sep',
            'jml_ibu_okt',
            'jml_ibu_nov',
            'jml_ibu_des'
        ));
    }
}
