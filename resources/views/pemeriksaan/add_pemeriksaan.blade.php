@extends('layout.v_template')
@section('title', 'Pemeriksaan')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Tambah pemeriksaan</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm" style="border:0;border-radius:10px">
                    <form action="/pemeriksaan" method="POST" class="form-horizontal">
                        @csrf
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Nama Anak :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="nama_anak" id="">
                                        <option value="" selected disabled>Nama pasien </option>
                                        @foreach ($data as $row)
                                            <option value="{{ $row->id }}">{{ $row->nama_anak }}</option>
                                        @endforeach
                                    </select>
                                    @error('nama_anak')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right ">Keluhan :</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="keluhan" id="" cols="30" rows="10" value="{{ old('keluhan') }}"
                                        placeholder="isi apa saya yang di rasakan dan apa kekurangannya"></textarea>
                                    @error('keluhan')
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
