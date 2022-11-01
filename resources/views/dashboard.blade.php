@extends('layout.v_template')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <!-- Card -->
        <div class="row header" style="row-gep: 10px">
            <div class="col-lg-3">
                <a href="/daftar"></a>
                <div class="card border-0 shadow-sm p-4"
                    style="background-image:linear-gradient(to right top, #7DBEFF  , #0068D1 ); color:#FFFFFF;border-radius:10px">
                    <h5>Jumlah Anak Terdaftar</h5>
                    <div class="d-flex align-items-center" style="gap: 20px">
                        <h1 class="ml-auto">{{$jumblah_anak}}</h1>
                        <h5>Orang</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <a href="/daftar"></a>
                <div class="card border-0 shadow-sm p-4"
                    style="background-image:linear-gradient(to right top, #7DBEFF  , #0068D1 ); color:#FFFFFF;border-radius:10px">
                    <h5>Jumlah Ibu Terdaftar</h5>
                    <div class="d-flex align-items-center" style="gap: 20px">
                        <h1 class="ml-auto">{{$jumblah_ibu}}</h1>
                        <h5>Orang</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <a href="/daftar"></a>
                <div class="card border-0 shadow-sm p-4"
                    style="background-image:linear-gradient(to right top, #7DBEFF  , #0068D1 ); color:#FFFFFF;border-radius:10px ">
                    <h5>Jumlah bidan</h5>
                    <div class="d-flex align-items-center" style="gap: 20px">
                        <h1 class="ml-auto">{{$jumblah_bidan}}</h1>
                        <h5>Orang</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <a href="/daftar"></a>
                <div class="card border-0 shadow-sm p-4"
                    style="background-image:linear-gradient(to right top, #7DBEFF  , #0068D1 ); color:#FFFFFF;border-radius:10px">
                    <h5>Jumlah dokter</h5>
                    <div class="d-flex align-items-center" style="gap: 20px">
                        <h1 class="ml-auto">{{$jumblah_dokter}}</h1>
                        <h5>Orang</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Card -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"
                        style="background-image:linear-gradient(to right top, #7DBEFF  , #0068D1 );color:#FFFFFF">
                        <h4 class="card-title">Data Daftar Anak Dan Ibu</h4>
                    </div>
                    <div class="card-body">
                        <div id="data-color" class="chart-container">
                            <canvas id="daftarChart" width="400" height="140"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>

        const ctl = document.getElementById('daftarChart');
        const daftarChart = new Chart(ctl, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                    'Oktober', 'November', 'Desember'
                ],
                datasets: [{
                        label: ['data anak'],
                        data: [
                            {{ $jml_anak_jan}},
                            {{ $jml_anak_feb}},
                            {{ $jml_anak_mar}},
                            {{ $jml_anak_apr}},
                            {{ $jml_anak_mei}},
                            {{ $jml_anak_jun}},
                            {{ $jml_anak_jul}},
                            {{ $jml_anak_aug}},
                            {{ $jml_anak_sep}},
                            {{ $jml_anak_okt}},
                            {{ $jml_anak_nov}},
                            {{ $jml_anak_des}}
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 99, 132, 1)',

                        ],
                        borderWidth: 2
                    },
                    {
                        label: ['data ibu'],
                        data: [
                            {{ $jml_ibu_jan}},
                            {{ $jml_ibu_feb}},
                            {{ $jml_ibu_mar}},
                            {{ $jml_ibu_apr}},
                            {{ $jml_ibu_mei}},
                            {{ $jml_ibu_jun}},
                            {{ $jml_ibu_jul}},
                            {{ $jml_ibu_aug}},
                            {{ $jml_ibu_sep}},
                            {{ $jml_ibu_okt}},
                            {{ $jml_ibu_nov}},
                            {{ $jml_ibu_des}}
                        ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                            'rgba(54, 162, 235,1)',
                        ],
                        borderWidth: 2
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
