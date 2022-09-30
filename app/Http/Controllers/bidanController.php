<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bidan;
use Illuminate\Support\Facades\Hash;

class bidanController extends Controller
{
    public function __construct()
    {
        $this->bidan = new bidan;
    }

    public function index()
    {
        $users = $this->bidan->showData();
        return view('bidan.shows', compact(('users')));
    }

    public function create()
    {
        return view('bidan.create');
    }

    public function save()
    {
        Request()->validate([
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required'
        ], [
            'nama.required' => 'nama harus di isi',
            'username.required' => 'username harus di isi',
            'password.required' => 'password harus di isi'
        ]);

        $data = [
            'nama' => Request()->nama,
            'username' => Request()->username,
            'role' => 'bidan',
            'password' => Hash::make(Request()->password)
        ];

        $this->bidan->addData($data);

        return redirect('/bidan')->with('pesan', 'Data berhasil di tambah');
    }

    public function updateData($id)
    {
        $data = $this->bidan->detailData($id);
        return view('bidan.edit', compact(('data')));
    }

    public function editData($id)
    {
        request()->validate([
            'nama' => 'required',
            'username' => 'required',
        ], [
            'nama.required' => 'nama harus di isi',
            'username.required' => 'username harus di isi',
        ]);


        if (Request()->password == '') {
            $result = [
                'nama' => Request()->nama,
                'username' => Request()->username
            ];
        } else {
            $result = [
                'nama' => Request()->nama,
                'username' => Request()->username,
                'password' => Hash::make(Request()->password)
            ];
        }
        $this->bidan->editData($id, $result);

        return redirect('/bidan')->with('pesan', 'Data berhasil di edit');
    }


    public function delete($id)
    {
        $this->bidan->deleteData($id);
        return redirect('/bidan')->with('pesan', 'Data berhasil di hapus');
    }
}
