<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{

    public function index()
    {
        $pasien = $this->pasien->showData();
        return view('pasien.v_pasien', compact('pasien'));
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
        $this->pasien->addData($data);
        return redirect('/pasien')->with('pesan','Data berhasil di tambah');
    }


    public function show(Pasien $pasien)
    {
        $data = $this->pasien->detailData($pasien);
        return view('pasien.detail_pasien', compact('data'));
    }


    public function edit(Pasien $pasien)
    {
        $data = $this->pasien->detailData($pasien);
        return view('pasien.update_pasien', compact('data'));
    }


    public function update(Pasien $pasien)
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
        $this->pasien->editData($pasien, $data);
        return redirect('/pasien')->with('pesan','Data berhasil di tambah');
    }


    public function destroy(Pasien $pasien)
    {
        $this->pasien->deleteData($pasien);
        return redirect('/pasien')->with('pesan','data sudah di hapus');
    }
}
