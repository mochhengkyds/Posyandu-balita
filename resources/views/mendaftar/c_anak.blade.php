@extends('layout.v_template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Tambah Data Anak</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm" style="border:0;border-radius:10px">
                    <form action="/anak/simpan" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="nama"
                                        value="{{ old('nama') }}" placeholder=" isi Nama">
                                    @error('nama')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Umur</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="umur"
                                        value="{{ old('umur') }}" placeholder=" isi umur">
                                    @error('umur')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">tempat lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="tempat_lahir"
                                        value="{{ old('tempat_lahir') }}" placeholder=" isi tempat lahir">
                                    @error('tempat_lahir')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">tanggal lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="fname" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir') }}" placeholder=" isi tanggal lahir">
                                    @error('tanggal_lahir')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">tanggal daftar</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="fname" name="tgl_df"
                                        value="{{ old('tgl_df') }}" placeholder="isi tanggal daftar">
                                    @error('tgl_df')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="" style="float: right;margin:15px">
                                <button type="submit" class="btn btn-info waves-effect">Simpan</button>
                                <a href="/anak">
                                    <button type="button" class="btn btn-default waves-effect">Kembali</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
