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
                    <form action="/anak/periksa/edit/{{ $data->id }}" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Nama anak</label>
                                <div class="col-sm-9">
                                    <select name="id_anak" class="form-control">
                                        @foreach ($danak as $kirim)
                                            <option value="{{ $kirim->id }}">{{ $kirim->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_anak')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Tanggal</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="fname" name="tanggal"
                                        value="{{ old('tanggal') }}" placeholder=" isi tanggal">
                                    @error('tanggal')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Berat badan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="fname" name="berat_badan"
                                        value="{{ old('berat_badan') }}" placeholder=" isi berat badan">
                                    @error('berat_badan')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Nama dokter</label>
                                <div class="col-sm-9">
                                    <select name="id_dokter" id="" class="form-control">
                                        @foreach ($dokter as $kirim)
                                            <option value="{{ $kirim->id }}">{{ $kirim->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('tgl_df')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Hasil pemeriksaan</label>
                                <div class="col-sm-9">
                                    <textarea rows="13" type="text" class="form-control" id="fname" name="priksa"
                                        value="{{ old('priksa') }}" placeholder=" isi periksa"></textarea>
                                        @error('priksa')
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
