<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dokter;

class dokterControler extends Controller
{

    public function __construct()
    {
        $this->dokter = new dokter;
    }

    public function index()
    {
        $dokter = $this->dokter->showData();
        return view('dokter.dshow', compact('dokter'));
    }

    public function create()
    {
        return view('dokter.dcreate');
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

        $this->dokter->addData($data);

        return redirect('/dokter')->with('pesan', 'Data berhasil di tambah');
    }

    public function updateData($id)
    {
        $datad = $this->dokter->detailData($id);
        return view('dokter.dedit', compact(('datad')));
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
        $this->dokter->editData($id, $result);

        return redirect('/dokter')->with('pesan', 'Data berhasil di edit');
    }


    public function deleteD($id)
    {
        $this->dokter->deleteData($id);
        return redirect('/dokter')->with('pesan', 'Data berhasil di hapus');
    }
}
