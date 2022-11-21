<?php

namespace App\Http\Controllers;

use App\Models\periksa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriksaController extends Controller
{
    public function __construct()
    {
        $this->periksa = new periksa;
    }

    public function index()
    {
        $data = $this->periksa->showData();
        return view('pemeriksaan.v_pemeriksaan', compact('data'));
    }


    public function create()
    {
        $data = DB::table('pasien')->get();
        return view('pemeriksaan.add_pemeriksaan', ['data' => $data]);
    }


    public function store()
    {
        Request()->validate([
            // 'nama_ibu' => 'required',
            // 'nama_anak' => 'required',
            // 'umur' => 'required',
            // 'berat_badan' => 'required',
            // 'alamat' => 'required|max:100',
            // 'tanggal_lahir' => 'required',
            // 'tanggal_daftar' => 'required',
            'nama_anak' => 'required',
            'keluhan' => 'required'
        ]);

        $data = [
            // 'nama_ibu' => Request()->nama_ibu,
            // 'nama_anak' => Request()->nama_anak,
            // 'umur' => Request()->umur,
            // 'berat_badan' => Request()->berat_badan,
            // 'alamat' => Request()->alamat,
            // 'tanggal_lahir' => Request()->tanggal_lahir,
            // 'tanggal_daftar' => Request()->tanggal_daftar,
            'id_pasien' => Request()->nama_anak,
            'keluhan' => Request()->keluhan
        ];
        $this->periksa->addData($data);
        return redirect('/pemeriksaan')->with('pesan', 'Data berhasil di tambah');
    }


    public function show($id)
    {
        $data = $this->periksa->detailData($id);
        return view('pemeriksaan.detail_pemeriksaan', compact('data'));
    }


    public function edit($id)
    {
        $data = $this->periksa->detailData($id);
        return view('pemeriksaan.update_pemeriksaan', compact('data'));
    }


    public function update($id)
    {
        Request()->validate([
            // 'nama_ibu' => 'required',
            // 'nama_anak' => 'required',
            // 'umur' => 'required',
            // 'berat_badan' => 'required',
            // 'alamat' => 'required',
            // 'tanggal_lahir' => 'required',
            // 'tanggal_daftar' => 'required',
            'id_pasien' => 'required',
            'keluhan' => 'required'
        ]);

        $data = [
            // 'nama_ibu' => Request()->nama_ibu,
            // 'nama_anak' => Request()->nama_anak,
            // 'umur' => Request()->umur,
            // 'berat_badan' => Request()->berat_badan,
            // 'tanggal_lahir' => Request()->tanggal_lahir,
            // 'tanggal_daftar' => Request()->tanggal_daftar,
            'id_pasien' => Request()->id_pasien,
            'keluhan' => Request()->keluhan
        ];
        $this->periksa->editData($id, $data);
        return redirect('/pemeriksaan')->with('pesan', 'Data berhasil di tambah');
    }


    public function destroy($id)
    {
        $this->periksa->deleteData($id);
        return redirect('/pemeriksaan')->with('pesan', 'data sudah di hapus');
    }
}
