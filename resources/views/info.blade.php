<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Info Natal dan Tahun Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: url('/images/bg-natal.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap:10px;
            padding: 20px;
        }
        .grid-item {
            background-color: white;
            border-radius: 15px;
            text-align: center;
            padding: 20px;
            box-shadow: 0 0 10px #ccc;
        }
        .grid-item img {
            width: 80px;
            height: auto;
        }
        .nav-bar {
            background-color: #007bff;
            color: white;
            padding: 15px;
        }
        footer {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="nav-bar d-flex justify-content-between text-decoration-none">
    <div><strong>LOGO NANTI</strong></div>
    <div>
        <a href="#" class="text-white mx-2 text-decoration-none">Home</a>
        <a href="#" class="text-white mx-2 text-decoration-none">About us</a>
        <a href="#" class="text-white mx-2 text-decoration-none">Panduan mudik</a>
        <a href="#" class="text-white mx-2 text-decoration-none">Aktivitas</a>
        <a href="info-kontak" class="text-white mx-2 text-decoration-none">Kontak</a>
    </div>
</div>
<!-- resources/views/info-nataru.blade.php -->
<div class="" style="background-image: url('/images/natal.png'); background-size: cover;">
@extends('layouts.app')
@section('content')
<h2 class="text-center fw-bold mb-5" style="font-size: 2.5rem; color:rgb(255, 255, 255);">
    INFO NATAL DAN TAHUN BARU
</h2>


    <div class="row justify-content-center g-4">
        @php
            $menus = [
                ['title' => 'Panduan Mudik', 'image' => 'panduan.png', 'color' => 'text-danger', 'btn' => 'btn-primary'],
                ['title' => 'CCTV', 'image' => 'cctv.png', 'color' => 'text-info', 'btn' => 'btn-info'],
                ['title' => 'Layanan Darurat 112', 'image' => '112.png', 'color' => 'text-danger', 'btn' => 'btn-warning'],
                ['title' => 'PPID', 'image' => 'ppid.png', 'color' => 'text-dark', 'btn' => 'btn-warning'],
                ['title' => 'Event Kota Semarang', 'image' => 'event.png', 'color' => 'text-warning', 'btn' => 'btn-warning'],
                ['title' => 'Pos Komando', 'image' => 'posko.png', 'color' => 'text-success', 'btn' => 'btn-info'],
                ['title' => 'Info Penunjang Perjalanan', 'image' => 'penunjang.png', 'color' => 'text-primary', 'btn' => 'btn-info'],
                ['title' => 'Info Wisata', 'image' => 'wisata.png', 'color' => 'text-info', 'btn' => 'btn-primary'],
                ['title' => 'Hotel & Restoran', 'image' => 'hotel.png', 'color' => 'text-info', 'btn' => 'btn-primary'],
                ['title' => 'Cafe & Tempat Nongkrong', 'image' => 'cafe.png', 'color' => 'text-dark', 'btn' => 'btn-warning'],
                ['title' => 'Cagar Budaya', 'image' => 'cagar.png', 'color' => 'text-success', 'btn' => 'btn-warning'],
                ['title' => 'Hiburan', 'image' => 'hiburan.png', 'color' => 'text-danger', 'btn' => 'btn-warning'],
                ['title' => 'Pusat Oleh-oleh', 'image' => 'oleh.png', 'color' => 'text-danger', 'btn' => 'btn-warning'],
                ['title' => 'Informasi Transportasi', 'image' => 'transportasi.png', 'color' => 'text-success', 'btn' => 'btn-success'],
                ['title' => 'Pesan Tiket', 'image' => 'tiket.png', 'color' => 'text-success', 'btn' => 'btn-warning'],
                ['title' => 'Info Jalan Berbasis GIS', 'image' => 'gis.png', 'color' => 'text-info', 'btn' => 'btn-primary'],
                ['title' => 'Jalur Jalan', 'image' => 'jalur.png', 'color' => 'text-primary', 'btn' => 'btn-success'],
                ['title' => 'Info Lain', 'image' => 'info.png', 'color' => 'text-danger', 'btn' => 'btn-warning'],
            ];
        @endphp

        @foreach ($menus as $menu)
        <div class="col-6 col-md-3 d-flex">
        <div class="card shadow-sm border border-2 w-100" style="border-radius: 20px; min-height: 130px;">
            <div class="card-body text-center d-flex flex-column justify-content-between">
                <div>
                    <h6 class="fw-bold {{ $menu['color'] }}">{{ strtoupper($menu['title']) }}</h6>
                    <img 
                        src="{{ asset('images/' . $menu['image']) }}" 
                        alt="{{ $menu['title'] }}"
                        style="width: {{ $menu['title'] === 'Panduan Mudik' ? '120px' : '80px' }}; height: auto;" 
                        class="my-2"
                    >
                </div>
                @php
                    $title = strtolower($menu['title']);
                    $link = match($title) {
                    'panduan mudik' => 'panduan-mudik',
                    'cctv' => 'cctv-nataru',
                    'layanan darurat 112' => 'layanan-darurat',
                    'ppid' => 'https://ppid.semarangkota.go.id/',
                    'event kota semarang' => 'https://ppid.semarangkota.go.id/event-kota-semarang/',
                    'pos komando' => 'pos-komando', 
                    'info penunjang perjalanan' => 'info-perjalanan',
                    'info wisata' => 'info-wisata',
                    'hotel & restoran' => 'info-hotel',
                    'cafe & tempat nongkrong' => 'info-cafe',
                    'cagar budaya' => 'https://cagarbudaya.semarangkota.go.id/',
                    'hiburan' => 'info-hiburan',
                    'pusat oleh-oleh' => 'https://infomudik.semarangkota.go.id/halaman/daftar/6',
                    'informasi transportasi' => 'info-transport',
                    'pesan tiket' => 'https://www.skyscanner.co.id/penerbangan/kedatangan-keberangkatan/srg/semarang-kedatangan-keberangkatan',
                    'info jalan berbasis gis' => 'https://sigita.dephub.go.id/portal/apps/sites/#/sigita',
                    'jalur jalan' => 'https://mudik.pu.go.id/', 
                    'info lain' => 'info-lain',
                    default => '#',
                    };
                @endphp
                <a href="{{ $link }}" target="_blank" class="btn {{ $menu['btn'] }} px-4 mt-3">Buka Link</a>
            </div>
        </div>
    </div> 
        @endforeach
        <div class="" style="background-image: url('/images/natal.png'); background-size: cover;">
    </div>
</div>



    <footer class="bg-primary py-5 mt-5">
    <div class="container">
        <h4 class="text-white text-center mb-4">LINK TERKAIT</h4>
        <div class="row justify-content-around">
            <div class="col-md-3 text-center">
            <button class="btn btn-light mb-3 text-primary fw-bold shadow-sm">
                    <i class="bi bi-globe2"></i> Semarang.go.id
                </button>
                <ul class="text-white list-unstyled">
                    <li>08112681112</li>
                    <li>Call Center Darurat 112</li>
                    <li>infomudik@semarangkota.go.id</li>
                    <li>Jl. Pemuda No.148, Kota Semarang</li>
                </ul>
            </div>
            <div class="col-md-3 text-center">
    <button class="btn btn-light mb-3 text-primary fw-bold shadow-sm">
        <i class="bi bi-telephone-forward me-2"></i> Layanan Darurat 112
    </button>
    <ul class="text-white list-unstyled">
        <li>08112681112</li>
        <li>Call Center Darurat 112</li>
        <li>infomudik@semarangkota.go.id</li>
        <li>Jl. Pemuda No.148, Kota Semarang</li>
    </ul>
</div>

            <div class="col-md-3 text-center ">
            <button class="btn btn-light mb-3 text-primary fw-bold shadow-sm">
                    <i class="bi bi-pin-map"></i> Lapor Semar
                </button>
                <ul class="text-white list-unstyled">
                    <li>08112681112</li>
                    <li>Call Center Darurat 112</li>
                    <li>infomudik@semarangkota.go.id</li>
                    <li>Jl. Pemuda No.148, Kota Semarang</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
@endsection
</body>
</html>
