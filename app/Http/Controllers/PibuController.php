<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pibu;

class PibuController extends Controller
{
    public function __construct()
    {
        $this->Pibu = new Pibu;
    }
    public function index()
    {
        $ibu = $this->Pibu->showData();
        return view('periksa.p_ibu', compact('p_ibu'));
    }

    public function create()
    {
        return view('periksa.c_ibu');
    }

    public function save()
    {
        Request()->validate([
            'tanggal' => 'required',
            'priksa' => 'required',
            'hasil' => 'required'
        ], [
            'tanggal.required' => 'tanggal harus di isi',
            'priksa.required' => 'priksa harus di isi',
            'hasil.required' => 'hasil lahir harus di isi'

        ]);


        $data = [
            'tanggal' => Request()->tanggal,
            'priksa' => Request()->priksa,
            'hasil' => Request()->hasil
        ];

        $this->Pibu->addData($data);

        return redirect('/ibu')->with('pesan', 'Data berhasil di tambah');
    }

    public function updateData($id)
    {
        $data = $this->Pibu->detailData($id);
        return view('periksa.p_ibu', compact(('ibu')));
    }

    public function editData($id)
    {
        Request()->validate([
            'tanggal' => 'required',
            'priksa' => 'required',
            'hasil' => 'required'
        ], [
            'tanggal.required' => 'tanggal harus di isi',
            'priksa.required' => 'priksa harus di isi',
            'hasil.required' => 'hasil lahir harus di isi'

        ]);

        $result = [
            'tanggal' => Request()->tanggal,
            'priksa' => Request()->priksa,
            'hasil' => Request()->hasil
        ];
        $this->Pibu->editData($id, $result);

        return redirect('/ibu/periksa')->with('pesan', 'Data berhasil di edit');
    }


    public function deleteD($id)
    {
        $this->Pibu->deleteData($id);
        return redirect('/ibu/periksa')->with('pesan', 'Data berhasil di hapus');
    }
}
