<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panak;

class PanakController extends Controller
{
    public function __construct()
    {
        $this->Panak = new Panak;
    }
    public function index()
    {
        $p_anak = $this->Panak->showData();
        return view('periksa.p_anak', compact('p_anak'));
    }

    public function create()
    {
        $p_anak = $this->Panak->showData();
        return view('periksa.c_anak', compact('p_anak'));
    }

    public function save()
    {
        Request()->validate([
            'tanggal' => 'required',
            'berat_badan' => 'required',
            'priksa' => 'required'
        ], [
            'tanggal.required' => 'tanggal harus di isi',
            'berat_badan.required' => 'berat badan harus di isi',
            'priksa.required' => 'priksa harus di isi'

        ]);


        $data = [
            'tanggal' => Request()->tanggal,
            'berat_badan' => Request()->berat_badan,
            'priksa' => Request()->priksa,
            'id_anak' => Request()->id_anak,
            'id_dokter' => Request()->id_dokter
        ];

        $this->Panak->addData($data);

        return redirect('/anak/periksa')->with('pesan', 'Data berhasil di tambah');
    }

    public function updateData($id)
    {
        $data = $this->Panak->detailData($id);
        $anak =$this->danak->detailData($id);
        $dokter =$this->dokter->detailData($id);
        return view('periksa.p_anak', compact('data','anak','dokter'));
    }

    public function editData($id)
    {
        Request()->validate([
            'tanggal' => 'required',
            'berat_badan' => 'required',
            'priksa' => 'required'
        ], [
            'tanggal.required' => 'tanggal harus di isi',
            'berat_badan.required' => 'berat badan harus di isi',
            'priksa.required' => 'priksa harus di isi',
        ]);

        $result = [
            'tanggal' => Request()->tanggal,
            'berat_badan' => Request()->berat_badan,
            'priksa' => Request()->priksa,
            'id_anak' => Request()->id_anak,
            'id_dokter' => Request()->id_dokter
        ];
        $this->Panak->editData($id, $result);

        return redirect('/anak/periksa')->with('pesan', 'Data berhasil di edit');
    }


    public function deleteD($id)
    {
        $this->Panak->deleteData($id);
        return redirect('/anak/periksa')->with('pesan', 'Data berhasil di hapus');
    }
}
