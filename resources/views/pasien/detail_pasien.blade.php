@extends('layout.v_template')
@section('title', 'Daftar Pasien')
@section('content')
    <div class="container-fluid">
        {{-- <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Data Pasien</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div> --}}
        <!-- ============================================================== -->
        <!-- tampilkan data pasien -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table m-t-30 no-wrap table-hover contact-list" action="/pasien/{{ $data->id }}"
                                enctype="multipart/form-data" method="POST">
                                <h2 class="text-center text-bold">Data Pasien</h2>
                                <tr>
                                    <td>Ibu</td>
                                    <td>: {{ $data->nama_ibu }}</td>
                                </tr>
                                <tr>
                                    <td>Anak</td>
                                    <td>: {{ $data->nama_anak }}</td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td>: {{ $data->umur }}</td>
                                </tr>
                                <tr>
                                    <td>Berat Bdan</td>
                                    <td>: {{ $data->berat_badan }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>: {{ $data->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>: {{ $data->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Daftar</td>
                                    <td>: {{ $data->tanggal_daftar }}</td>
                                </tr>
                                <tr>
                                    <td>Keluhan</td>
                                    <td>: {{ $data->keluhan }}</td>
                                </tr>
                            </table>
                            <a href="/pasien"><button type="button"
                                    class="btn btn-info waves-effect mb-4">Kembali</button></a>
                            <a href="/printpdfperid/{{ $data->id }}"><button type="button"
                                    class="btn btn-success waves-effect mb-4">PrintPDF</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
