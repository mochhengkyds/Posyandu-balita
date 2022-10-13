<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\danak;

class DanakController extends Controller
{
    public function __construct()
    {
        $this->danak = new danak;
    }
    public function index()
    {
        $anak = $this->danak->showData();
        return view('mendaftar.anak', compact('anak'));
    }

    public function create()
    {
        return view('mendaftar.c_anak');
    }

    public function save()
    {
        Request()->validate([
            'nama' => 'required',
            'umur' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tgl_df' => 'required'
        ], [
            'nama.required' => 'nama harus di isi',
            'umur.required' => 'umur harus di isi',
            'tempat_lahir.required' => 'tempat lahir harus di isi',
            'tanggal_lahir.required' => 'tanggal lahir harus di isi',
            'tgl_df.required' => 'tanggal daftar harus di isi'

        ]);


        $data = [
            'nama' => Request()->nama,
            'umur' => Request()->umur,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'tgl_df' => Request()->tgl_df
        ];

        $this->danak->addData($data);

        return redirect('/anak')->with('pesan', 'Data berhasil di tambah');
    }

    public function updateData($id)
    {
        $data = $this->danak->detailData($id);
        return view('mendaftar.anak', compact(('anak')));
    }

    public function editData($id)
    {
        Request()->validate([
            'nama' => 'required',
            'umur' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'tgl_df' => 'required'
        ], [
            'nama.required' => 'nama harus di isi',
            'umur.required' => 'umur harus di isi',
            'tempat_lahir.required' => 'tempat lahir harus di isi',
            'tanggal_lahir.required' => 'tanggal lahir harus di isi',
            'tgl_df.required' => 'tanggal daftar harus di isi'

        ]);

        $result = [
            'nama' => Request()->nama,
            'umur' => Request()->umur,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'tgl_df' => Request()->tgl_df
        ];
        $this->danak->editData($id, $result);

        return redirect('/anak')->with('pesan', 'Data berhasil di edit');
    }


    public function deleteD($id)
    {
        $this->danak->deleteData($id);
        return redirect('/anak')->with('pesan', 'Data berhasil di hapus');
    }
}
