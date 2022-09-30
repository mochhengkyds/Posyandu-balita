<?php

namespace App\Http\Controllers;

use App\Models\tempat;
use Illuminate\Http\Request;

class tempatController extends Controller
{

    public function __construct()
    {
        $this->tempat = new tempat;
    }

    public function show()
    {
        $tempat = $this->tempat->showData();
        return view('dokter.dshow', compact('tempat'));
    }

    public function create()
    {
        return view('dokter.dcreate');
    }
    public function save()
    {
        Request()->validate([
            'tempat' => 'required'
        ]);


        $data = [
            'tempat' => Request()->tempat
        ];

        $this->tempat->addData($data);

        return redirect('/dokter')->with('pesan', 'Data berhasil di tambah');
    }
}
