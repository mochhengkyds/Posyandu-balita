@extends('layout.v_template')
@section('title', 'dashboard')
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
            <div class="col-lg-6">
                <a href="/daftar"></a>
                <div class="card border-0 shadow-sm p-4"
                    style="background-image:linear-gradient(to right top, #7DBEFF  , #0068D1 ); color:#FFFFFF;border-radius:10px">
                    <h5>Jumlah Pasien Terdaftar</h5>
                    <div class="d-flex align-items-center" style="gap: 20px">
                        <h1 class="ml-auto">10</h1>
                        <h5>Orang</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
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
        </div>
        <!-- end Card -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"
                        style="background-image:linear-gradient(to right top, #7DBEFF  , #0068D1 );color:#FFFFFF">
                        <h4 class="card-title">Data Anak</h4>
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
                            1,2,3,4,5,6,7,8,9,10,11,12
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
