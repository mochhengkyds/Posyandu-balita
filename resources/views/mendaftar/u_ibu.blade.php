@extends('layout.v_template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h3 class="page-title">Edit daftar ibu</h4>
                    <div class="d-flex align-items-center">
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/ibu/edit/{{ $data->id }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $data->nama }}"
                                placeholder="masukan nama">
                        </div>
                        <div class="form-group">
                            <label for="">tempat lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" value="{{ $data->tempat_lahir }}"
                                placeholder="tempat lahir">
                        </div>
                        <div class="form-group">
                            <label for="">tanggal lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control"
                                value="{{ $data->tanggal_lahir }}" placeholder="tanggal lahir">
                        </div>
                        <div class="form-group">
                            <label for="">alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ $data->alamat }}"
                                placeholder="alamat">
                        </div>
                        <div class="form-group">
                            <label for="">no telepon</label>
                            <input type="text" name="no_tlp" class="form-control" value="{{ $data->no_tlp }}"
                                placeholder="no telepon">
                        </div>
                        <div class="form-group">
                            <label for="">nama suami</label>
                            <input type="text" name="suami" class="form-control" value="{{ $data->suami }}"
                                placeholder="nama suami">
                        </div>
                        <div class="form-group">
                            <label for="">tanggal daftar</label>
                            <input type="date" name="tgl_df" class="form-control" value="{{ $data->tgl_df }}"
                                placeholder="tanggal daftar">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
