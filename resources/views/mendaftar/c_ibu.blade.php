@extends('layout.v_template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Tambah Data Ibu</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm" style="border:0;border-radius:10px">
                    <form action="/dokter/simpan" method="POST" class="form-horizontal">
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
                                <label for="fname" class="col-sm-3 text-right ">alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="alamat"
                                        value="{{ old('alamat') }}" placeholder=" isi alamat">
                                    @error('alamat')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">no telepon</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="no_tlp"
                                        value="{{ old('no_tlp') }}" placeholder=" isi no tlp">
                                    @error('no_tlp')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right ">jam aktif</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="lname" name="suami"
                                        value="{{ old('suami') }}" placeholder=" isi jam aktif">
                                    @error('suami')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right ">jam akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email1" name="tgl_df"
                                        value="{{ old('tgl_df') }}" placeholder=" isi jam akhir">
                                    @error('tgl_df')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="" style="float: right;margin:15px">
                                <button type="submit" class="btn btn-info waves-effect">Simpan</button>
                                <a href="/ibu">
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
