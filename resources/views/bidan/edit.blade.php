@extends('layout.v_template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h3 class="page-title">Edit</h4>
                    <div class="d-flex align-items-center">
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/bidan/edit/{{ $data->id }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $data->nama }}"
                                placeholder="masukan nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">username</label>
                            <input type="text" name="username" class="form-control" value="{{ $data->username }}"
                                placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jika anda ingin merubah password silahkan di isi, jika tidak
                                abaikan</label>
                            <input type="text" name="password" class="form-control" value="{{ old('password') }}"
                                placeholder="password...">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
