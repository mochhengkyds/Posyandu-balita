@extends('layout.v_template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Tambah Bidan</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm" style="border:0;border-radius:10px">
                    <form action="/bidan/simpan" method="POST" class="form-horizontal">
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
                                <label for="lname" class="col-sm-3 text-right ">Username</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="lname" name="username"
                                        value="{{ old('username') }}" placeholder=" isi username">
                                    @error('username')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email1" class="col-sm-3 text-right ">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="email1" name="password"
                                        value="{{ old('password') }}" placeholder=" isi password">
                                    @error('password')
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
