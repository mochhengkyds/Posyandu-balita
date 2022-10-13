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
        $anak = $this->Panak->showData();
        return view('periksa.p_anak', compact('p_anak'));
    }

    public function create()
    {
        return view('periksa.c_anak');
    }

    public function save()
    {
        Request()->validate([
            'tanggal' => 'required',
            'berat_badan' => 'required',
            'priksa' => 'required',
            'hasil' => 'required'
        ], [
            'tanggal.required' => 'tanggal harus di isi',
            'berat_badan.required' => 'berat badan harus di isi',
            'priksa.required' => 'priksa harus di isi',
            'hasil.required' => 'hasil lahir harus di isi'

        ]);


        $data = [
            'tanggal' => Request()->tanggal,
            'berat_badan' => Request()->berat_badan,
            'priksa' => Request()->priksa,
            'hasil' => Request()->hasil
        ];

        $this->Panak->addData($data);

        return redirect('/anak')->with('pesan', 'Data berhasil di tambah');
    }

    public function updateData($id)
    {
        $data = $this->Panak->detailData($id);
        return view('periksa.p_anak', compact(('anak')));
    }

    public function editData($id)
    {
        Request()->validate([
            'tanggal' => 'required',
            'berat_badan' => 'required',
            'priksa' => 'required',
            'hasil' => 'required'
        ], [
            'tanggal.required' => 'tanggal harus di isi',
            'berat_badan.required' => 'berat badan harus di isi',
            'priksa.required' => 'priksa harus di isi',
            'hasil.required' => 'hasil lahir harus di isi'

        ]);

        $result = [
            'tanggal' => Request()->tanggal,
            'berat_badan' => Request()->berat_badan,
            'priksa' => Request()->priksa,
            'hasil' => Request()->hasil
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
