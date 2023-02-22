@extends('layouts.main')

@section('container')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica,
                Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        .main-container {
            padding: 0px;
        }

        /* HEADING */

        .heading {
            text-align: justify;
        }

        .heading__title {
            font-weight: 600;
            color: #3d5654;
        }

        .heading__credits {
            margin: 10px 0px;
            color: #c99c33;
            font-size: 25px;
            transition: all 0.5s;
        }

        .heading__link {
            text-decoration: none;
        }

        .heading__credits .heading__link {
            color: inherit;
        }

        /* CARDS */

        .cards {
            display: inline;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            margin: 20px;
            padding: 20px;
            width: 900px;
            min-height: 200px;
            display: grid;
            grid-template-rows: 20px 50px 1fr 50px;
            border-radius: 10px;
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.25);
            transition: all 0.2s;
        }

        .card:hover {
            box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
            transform: scale(1.01);
        }

        .card__link,
        .card__exit,
        .card__icon {
            position: relative;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.9);
        }

        .card__link::after {
            position: absolute;
            top: 25px;
            left: 0;
            content: "";
            width: 0%;
            height: 3px;
            background-color: rgba(255, 255, 255, 0.6);
            transition: all 0.5s;
        }

        .card__link:hover::after {
            width: 100%;
        }

        .card__exit {
            grid-row: 1/2;
            justify-self: end;
        }

        .card__icon {
            grid-row: 2/3;
            font-size: 30px;
        }

        .card__title {
            grid-row: 3/4;
            font-weight: 400;
            color: #ffffff;
        }

        .card__apply {
            grid-row: 4/5;
            align-self: center;
        }

        /* CARD BACKGROUNDS */

        .card-1 {
            background: radial-gradient(#1fe4f5, #3fbafe);
        }

        .card-2 {
            background: radial-gradient(#fbc1cc, #fa99b2);
        }

        .card-3 {
            background: radial-gradient(#76b2fe, #b69efe);
        }

        .card-4 {
            background: radial-gradient(#60efbc, #58d5c9);
        }

        .card-5 {
            background: radial-gradient(#f588d8, #c0a3e5);
        }

        /* RESPONSIVE */

        @media (max-width: 1600px) {
            .cards {
                justify-content: center;
            }
        }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Judul Buku', 'Jumlah Peminjaman'],
                <?php echo $chartData; ?>

            ]);

            var options = {
                title: 'Buku paling banyak dipinjam',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Jaminan Terbanyak', 'Jumlah'],
                <?php echo $jaminanData; ?>

            ]);

            var options = {
                title: 'Jaminan terbanyak digunakan',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
            chart.draw(data, options);
        }
    </script>



    <div class="main-container">
        <div class="heading">
            <h1 class="heading__title">Dashboard myLibrary</h1>
            <p class="heading__credits"><a class="heading__link">Data Perpustakaan</a></p>
        </div>
        <div class="cards">
            <div class="card card-1">
                <div class="card__icon"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="16"
                        fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                        <path
                            d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                    </svg></div>
                <p class="card__exit"><i class="bi bi-book-half"></i></p>
                <h2 class="card__title">{{ $jumlah_buku }} Buku<br />
                    Yang kita miliki di perpustakaan.
                </h2>
                <p class="card__apply">
                    <a class="card__link" href="/buku">Lihat daftar buku<i class="fas fa-arrow-right"></i></a>
                </p>
            </div>
            <div class="card card-2">
                <div class="card__icon"><i class="fas fa-bolt"></i></div>
                <p class="card__exit"><i class="fas fa-times"></i></p>
                <h2 class="card__title">{{ $jumlah_pengunjung }} Pengunjung<br />
                    Yang telah meminjam dan membaca buku di perpustakaan.
                </h2>
                <p class="card__apply">
                    <a class="card__link" href="/pengunjung">Lihat daftar pengunjung <i class="fas fa-arrow-right"></i></a>
                </p>
            </div>
            <div class="card card-3">
                <div class="card__icon"><i class="fas fa-bolt"></i></div>
                <p class="card__exit"><i class="fas fa-times"></i></p>
                <h2 class="card__title">{{ $jumlah_peminjaman }} Buku <br />
                    Telah dipinjam di perpustakaan kita.
                </h2>
                <p class="card__apply">
                    <a class="card__link" href="/peminjaman">Lihat daftar peminjaman <i class="fas fa-arrow-right"></i></a>
                </p>
            </div>
            <div class="card card-4">
                <div class="card__icon"><i class="fas fa-bolt"></i></div>
                <p class="card__exit"><i class="fas fa-times"></i></p>
                <h2 class="card__title">{{ $jumlah_pengembalian }} Buku <br />
                    Telah dikembalikan ke perpustakan kita.
                </h2>
                <p class="card__apply">
                    <a class="card__link" href="/pengembalian">Lihat daftar pengembalian <i
                            class="fas fa-arrow-right"></i></a>
                </p>
            </div>

            <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
            <div id="piechart_3d2" style="width: 900px; height: 500px;"></div>

            <div style="width: 83%" id="container">
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script>
                    var dataPeminjaman = <?php echo json_encode($dataPeminjaman); ?>;
                    Highcharts.chart('container', {

                        title: {
                            text: "Jumlah peminjaman dalam satu tahun"
                        },
                        xAxis: {
                            categories: ['January', 'February', 'March', 'April', 'May', 'June',
                                'July', 'August', 'September', 'October', 'November', 'December'
                            ]
                        },
                        yAxis: {
                            title: {
                                text: "Jumlah peminjaman"
                            }
                        },

                        series: [{
                            name: "Banyak buku dipinjam bulan ini",
                            data: dataPeminjaman
                        }],
                    })
                </script>
            </div>

            <br />
            <br />
            <br />

            <div style="width: 83%" id="container1">
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script>
                    var dataPengembalian = <?php echo json_encode($dataPengembalian); ?>;
                    Highcharts.chart('container1', {

                        title: {
                            text: "Jumlah pengembalian buku dalam satu tahun"
                        },
                        xAxis: {
                            categories: ['January', 'February', 'March', 'April', 'May', 'June',
                                'July', 'August', 'September', 'October', 'November', 'December'
                            ]
                        },
                        yAxis: {
                            title: {
                                text: "Jumlah pengembalian"
                            }
                        },

                        series: [{
                            name: "Banyak buku yang sudah dikembalikan bulan ini",
                            data: dataPengembalian
                        }],
                    })
                </script>
            </div>



        </div>
    </div>{{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
