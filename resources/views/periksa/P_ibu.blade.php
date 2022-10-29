@extends('layout.v_template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Daftar anak</h4>
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
                        <a href="/anak/periksa/tambah"><button type="button" class="btn btn-info "><i class="fa fa-plus"
                                    aria-hidden="true"></i> Tambah Daftar</button></a>
                        <div class="table-responsive">
                            <table id="myTables" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                                <thead>
                                    <tr style="color:#046BD2">
                                        <th>No</th>
                                        <th>Nama Ibu</th>
                                        <th>tanggal</th>
                                        <th>hasil pemeriksaan</th>
                                        <th>dokter</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($p_ibu as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->tanggal }}</td>
                                            <td>{{ $row->priksa }}</td>
                                            <td>{{ $row->nama }}</td>
                                            <td>
                                                <a href="/anak/periksa/edit/{{ $row->id }}"><button
                                                        class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn"><i
                                                            class="fa fa-edit" aria-hidden="true"></i></button></a>
                                                <a href="/anak/periksa/{{ $row->id }}"><button
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
    </div>
@endsection
