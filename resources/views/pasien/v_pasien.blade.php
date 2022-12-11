@extends('layout.v_template')
@section('title', 'data pasien')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Data Pasien</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div>
        {{-- menampilkan informasi --}}
        @if (Session::has('pesan'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('pesan') }}
            </div>
        @endif
        <!-- ============================================================== -->
        <!-- tampilkan data bidan -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <a href="/pasien/create"><button type="button" class="btn btn-info mb-4 "><i
                                    class="fa-solid fa-person-circle-plus"></i>
                                Tambah Pasien</button></a>
                        <a href="/downloadpdf"><button type="button" class="btn btn-success mb-4 "><i
                                    class="fa-solid fa-file-export"></i>
                                Print PDF</button></a>
                        <div class="table-responsive">
                            <table id="myTables" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama Ibu</th>
                                        <th>Nama Anak</th>
                                        <th>Umur</th>
                                        <th>Berat Badan</th>
                                        <th class="w-50">Alamat</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->nama_ibu }}</td>
                                            <td>{{ $row->nama_anak }}</td>
                                            <td>{{ $row->umur }}</td>
                                            <td>{{ $row->berat_badan }}</td>
                                            <td>{{ $row->alamat }}</td>
                                            <td>{{ \Carbon\Carbon::createFromTimestamp(strtotime($row->tanggal_lahir))->format('d M Y') }}
                                            </td>
                                            <td>{{ \Carbon\Carbon::createFromTimestamp(strtotime($row->tanggal_daftar))->format('D, d M Y') }}
                                            </td>
                                            <td>
                                                <div class="btn-group dropleft">
                                                    <button type="button" class="btn btn-primary dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bi bi-three-dots-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a href="/pasien/{{ $row->id }}/edit"><button
                                                                class="btn  btn-pure btn-outline edit-row-btn"><i
                                                                    class="fa fa-edit" aria-hidden="true"></i></button></a>
                                                        <a href="/pasien/{{ $row->id }}"><button
                                                                class="btn  btn-pure btn-outline book-row-btn"><i
                                                                    class="fa fa-book" aria-hidden="true"></i></button></a>
                                                        <a href="/pasien/{{ $row->id }}/hapus"><button
                                                                class="btn  btn-pure btn-outline delete-row-btn"><i
                                                                    class="fa fa-trash"
                                                                    onclick="return confirm('Apa anda yakin ingin menghapus??')"
                                                                    aria-hidden="true"></i></button></a>
                                                    </div>
                                                </div>
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
