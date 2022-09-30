@extends('layout.v_template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Data Anak</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="/dokter/tambah"><button type="button" class="btn btn-info "><i class="fa fa-plus"
                                    aria-hidden="true"></i> Tambah Dokter</button></a>
                        <div class="table-responsive">
                            <table id="myTables" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        @if (auth()->user()->role == 'admin')
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                        @endif
                                        <th>Telepon</th>
                                        <th>Jam Aktif</th>
                                        <th>Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dokter as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            @if (auth()->user()->role == 'admin')
                                                <td>{{ $item->tempat_lahir }}</td>
                                                <td>{{ $item->tanggal_lahir }}</td>
                                                <td>{{ $item->alamat }}</td>
                                            @endif
                                            <td>{{ $item->no_tlp }}</td>
                                            <td>{{ \Carbon\Carbon::createFromFormat('H:i:s', $item->jam_aktif)->format('h:i') }}
                                                -
                                                {{ \Carbon\Carbon::createFromFormat('H:i:s', $item->jam_akhir)->format('h:i') }}
                                            </td>
                                            <td>
                                                <a href="/bidan/edit/{{ $item->id }}" data-toggle="tooltip"
                                                    data-original-title="edit"><button
                                                        class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn"><i
                                                            class="fa fa-edit" aria-hidden="true"></i></button></a>
                                                <a href="/bidan/{{ $item->id }}" data-toggle="tooltip"
                                                    data-original-title="Delete"><button
                                                        class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn"><i
                                                            class="fa fa-trash"
                                                            onclick="return confirm('Apa anda yakin ingin menghapus??')"
                                                            aria-hidden="true"></i></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
