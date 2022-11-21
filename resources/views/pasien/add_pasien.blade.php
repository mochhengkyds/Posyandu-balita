@extends('layout.v_template')
@section('title', 'Daftar Pasien')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Tambah Pasien</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm" style="border:0;border-radius:10px">
                    <form action="/pasien" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Nama Ibu</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="nama_ibu"
                                        value="{{ old('nama_ibu') }}" placeholder=" isi nama ibu">
                                    @error('nama_ibu')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Nama Anak</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="nama_anak"
                                        value="{{ old('nama_anak') }}" placeholder=" isi nama anak">
                                    @error('nama_anak')
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
                                <label for="fname" class="col-sm-3 text-right ">Berat Badan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="berat_badan"
                                        value="{{ old('berat_badan') }}" placeholder=" isi berat badan">
                                    @error('berat_badan')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="alamat"
                                        value="{{ old('alamat') }}" placeholder=" isi alamat">
                                    @error('alamat')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="fname" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir') }}" placeholder=" isi tanggal lahir">
                                    @error('tanggal_lahir')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Tanggal Daftar</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="fname" name="tanggal_daftar"
                                        value="{{ old('tanggal_daftar') }}" placeholder=" isi tanggal daftar">
                                    @error('tanggal_daftar')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="" style="float: right;margin:15px">
                                <button type="submit" class="btn btn-info waves-effect">Simpan</button>
                                <button type="reset" class="btn btn-default waves-effect">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
