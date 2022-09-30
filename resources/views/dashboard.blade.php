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
                        <h1 class="ml-auto">123</h1>
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
                        <h1 class="ml-auto">123</h1>
                        <h5>Orang</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <a href="/daftar"></a>
                <div class="card border-0 shadow-sm p-4"
                    style="background-image:linear-gradient(to right top, #7DBEFF  , #0068D1 ); color:#FFFFFF;border-radius:10px ">
                    <h5>Jumlah Periksa anak</h5>
                    <div class="d-flex align-items-center" style="gap: 20px">
                        <h1 class="ml-auto">123</h1>
                        <h5>Orang</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <a href="/daftar"></a>
                <div class="card border-0 shadow-sm p-4"
                    style="background-image:linear-gradient(to right top, #7DBEFF  , #0068D1 ); color:#FFFFFF;border-radius:10px">
                    <h5>Jumlah Periksa Ibu</h5>
                    <div class="d-flex align-items-center" style="gap: 20px">
                        <h1 class="ml-auto">123</h1>
                        <h5>Orang</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Card -->
        <div class="row">
            {{-- <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h4 class="card-title">grafik donat</h4>
                        </div>
                        <div id="data-color" class="chart-container">
                            <canvas id="doughnutChart"></canvas>
                        </div>
                    </div>
                </div>
            </div> --}}
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
                labels: ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september',
                    'oktober', 'november', 'desember'
                ],
                datasets: [{
                    label: ['anak'],
                    data: [35, 39, 28, 21, 18, 40, 55, 34, 24, 45, 11, 23],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            data: {
                labels: ['januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september',
                    'oktober', 'november', 'desember'
                ],
                datasets: [{
                        label: ['anak'],
                        data: [50, 35, 59, 58, 21, 28, 57, 22, 14, 45, 22, 34],
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
                        label: ['ibu'],
                        data: [35, 39, 28, 21, 18, 40, 55, 34, 24, 45, 11, 23],
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
