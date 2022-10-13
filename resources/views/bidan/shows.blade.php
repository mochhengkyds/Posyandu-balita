@extends('layout.v_template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Data Bidan</h4>
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
                        <a href="/bidan/tambah"><button type="button" class="btn btn-info mb-4 "><i class="fa fa-plus"
                                    aria-hidden="true"></i>
                                Tambah Bidan</button></a>
                        <div class="table-responsive">
                            <table id="myTables" class="table m-t-30 no-wrap table-hover contact-list" data-page-size="10">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $row)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <p>{{ $row->nama }}</p>
                                            </td>
                                            <td>{{ $row->username }}</td>
                                            <td><span class="label label-success">{{ $row->role }}</span> </td>
                                            <td>
                                                <a href="/bidan/edit/{{ $row->id }}"><button
                                                        class="btn btn-sm btn-icon btn-pure btn-outline edit-row-btn"><i
                                                            class="fa fa-edit" aria-hidden="true"></i></button></a>
                                                <a href="/bidan/{{ $row->id }}"><button
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
