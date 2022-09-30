<?php

namespace App\Http\Controllers;

use App\Models\d_ibu;
use Illuminate\Http\Request;

class DIbuController extends Controller
{
    public function __construct()
    {
        $this->d_ibu = new d_ibu;
    }
    public function index()
    {
        $data = $this->d_ibu->showData();
        return view('mendaftar.ibu', compact('ibu'));
    }
    public function create()
    {
        return view('mendaftar.c_ibu');
    }
    public function save()
    {
        Request()->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'suami' => 'required',
            'tgl_df' => 'required'
        ], [
            'nama.required' => 'nama harus di isi',
            'tempat_lahir.required' => 'tempat lahir harus di isi',
            'tanggal_lahir.required' => 'tanggal lahir harus di isi',
            'alamat.required' => 'alamat harus di isi',
            'no_tlp.required' => 'nomer telepon harus di isi',
            'suami.required' => 'nama suami harus di isi',
            'tgl_df.required' => 'jam harus di isi'

        ]);


        $data = [
            'nama' => Request()->nama,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->tanggal_lahir,
            'alamat' => Request()->alamat,
            'no_tlp' => Request()->no_tlp,
            'suami' => Request()->suami,
            'tgl_df' => Request()->tgl_df
        ];

        $this->danak->addData($data);

        return redirect('/ibu')->with('pesan', 'Data berhasil di tambah');
    }

    public function updateData($id)
    {
        $datad = $this->dokter->detailData($id);
        return view('mendaftar.u_ibu', compact(('ibu')));
    }

    public function editData($id)
    {
        request()->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_tlp' => 'required',
            'suami' => 'required',
            'tgl_df' => 'required'
        ], [
            'nama.required' => 'nama harus di isi',
            'tempat_lahir.required' => 'tempat lahir harus di isi',
            'tanggal_lahir.required' => 'tanggal lahir harus di isi',
            'alamat.required' => 'alamat harus di isi',
            'no_tlp.required' => 'nomer telepon harus di isi',
            'suami.required' => 'nama suami harus di isi',
            'tgl_df.required' => 'jam harus di isi'

        ]);

        $result = [
            'nama' => Request()->nama,
            'tempat_lahir' => Request()->tempat_lahir,
            'tanggal_lahir' => Request()->Tanggal_lahir,
            'alamat' => Request()->alamat,
            'no_tlp' => Request()->no_tlp,
            'suami' => Request()->suami,
            'tgl_df' => Request()->tgl_df
        ];
        $this->dokter->editData($id, $result);

        return redirect('/ibu')->with('pesan', 'Data berhasil di edit');
    }


    public function deleteD($id)
    {
        $this->dokter->deleteData($id);
        return redirect('/ibu')->with('pesan', 'Data berhasil di hapus');
    }
}
