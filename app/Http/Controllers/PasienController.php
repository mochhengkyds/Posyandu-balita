<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->Pasien = new Pasien;
    }

    public function index()
    {
        $data = $this->Pasien->showData();
        return view('pasien.v_pasien', compact('data'));
    }


    public function create()
    {
        return view('pasien.add_pasien');
    }


    public function store()
    {
        Request()->validate([
            'nama_ibu' => 'required',
            'nama_anak' => 'required',
            'umur' => 'required',
            'berat_badan' => 'required',
            'alamat' => 'required|max:100',
            'tanggal_lahir' => 'required',
            'tanggal_daftar' => 'required'
        ]);

        $data = [
            'nama_ibu' => Request()->nama_ibu,
            'nama_anak' => Request()->nama_anak,
            'umur' => Request()->umur,
            'berat_badan' => Request()->berat_badan,
            'alamat' => Request()->alamat,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'tanggal_daftar' => Request()->tanggal_daftar
        ];
        $this->Pasien->addData($data);
        return redirect('/pasien')->with('pesan', 'Data berhasil di tambah');
    }


    public function show($id)
    {

        $data = $this->Pasien->detailData($id);
        return view('pasien.detail_pasien', compact('data'));
    }


    public function edit($id)
    {

        $data = $this->Pasien->detailData($id);
        return view('pasien.update_pasien', compact('data'));
    }


    public function update($id)
    {
        Request()->validate([
            'nama_ibu' => 'required',
            'nama_anak' => 'required',
            'umur' => 'required',
            'berat_badan' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'tanggal_daftar' => 'required'
        ]);

        $data = [
            'nama_ibu' => Request()->nama_ibu,
            'nama_anak' => Request()->nama_anak,
            'umur' => Request()->umur,
            'berat_badan' => Request()->berat_badan,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'tanggal_daftar' => Request()->tanggal_daftar
        ];
        $this->Pasien->editData($id, $data);
        return redirect('/pasien')->with('pesan', 'Data berhasil di tambah');
    }


    public function destroy($id)
    {
        $this->Pasien->deleteData($id);
        return redirect('/pasien')->with('pesan', 'data sudah di hapus');
    }

    public function printpdf()
    {
        $pasien = pasien::all();
        // return view('pasien.print', compact(('pasien')));
        // dd($pasien);
        $pdf = PDF::loadView('pasien.print', compact(('pasien')));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->download(Rand(1, 100) . 'Data Seleuruh Pasien.pdf');
    }
    public function printpdfid($id)
    {
        $pasienbio = DB::table('pasien')->where('pasien.id', $id)->join('pemeriksaan', 'pemeriksaan.id', 'pasien.id')->first();
        // $pasienbio = pasien::where('pasien.id', $id)->join('pemeriksaan', 'pemeriksaan.id', 'pasien.id')->get();
        // dd($pasienbio);
        $pdf = PDF::loadview('pasien.print_biodata', compact(('pasienbio')));
        $pdf->setPaper('a4', 'portait');
        return $pdf->download(Rand(1, 100) . 'Data Pasien.pdf');
    }
}
