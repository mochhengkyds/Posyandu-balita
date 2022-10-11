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
        return view('mendaftar.anak', compact('danak'));
    }

    public function create()
    {
        return view('mendaftar.c_anak');
    }

    public function save()
    {
        Request()->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'jam_aktif' => 'required',
            'jam_akhir' => 'required'
        ], [
            'nama.required' => 'nama harus di isi',
            'tempat_lahir.required' => 'tempat lahir harus di isi',
            'tanggal_lahir.required' => 'tanggal lahir harus di isi',
            'alamat.required' => 'alamat harus di isi',
            'no_tlp.required' => 'nomer telepon harus di isi',
            'jam_aktif.required' => 'jam harus di isi',
            'jam_akhir.required' => 'jam harus di isi'

        ]);


        $data = [
            'nama' => Request()->nama,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'alamat' => Request()->alamat,
            'no_tlp' => Request()->no_tlp,
            'jam_aktif' => Request()->jam_aktif,
            'jam_akhir' => Request()->jam_akhir
        ];

        $this->danak->addData($data);

        return redirect('/anak')->with('pesan', 'Data berhasil di tambah');
    }

    public function updateData($id)
    {
        $data = $this->danak->detailData($id);
        return view('mendaftar.anak', compact(('data')));
    }

    public function editData($id)
    {
        request()->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'jam_aktif' => 'required',
            'jam_akhir' => 'required'
        ], [
            'nama.required' => 'nama harus di isi',
            'tempat_lahir.required' => 'tempat lahir harus di isi',
            'tanggal_lahir.required' => 'tanggal lahir harus di isi',
            'alamat.required' => 'alamat harus di isi',
            'no_tlp.required' => 'nomer telepon harus di isi',
            'jam_aktif.required' => 'jam harus di isi',
            'jam_akhir.required' => 'jam harus di isi'

        ]);

        $result = [
            'nama' => Request()->nama,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->Tanggal_lahir,
            'alamat' => Request()->alamat,
            'no_tlp' => Request()->no_tlp,
            'jam_aktif' => Request()->jam_aktif,
            'jam_akhir' => Request()->jam_akhir
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
