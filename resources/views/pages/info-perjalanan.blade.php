<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>info-perjalanan</title>
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
<div class="nav-bar d-flex justify-content-between">
    <div><strong>LOGO NANTI</strong></div>
    <div>
        <a href="#" class="text-white mx-2 text-decoration-none">Home</a>
        <a href="#" class="text-white mx-2 text-decoration-none">About us</a>
        <a href="#" class="text-white mx-2 text-decoration-none">Panduan mudik</a>
        <a href="#" class="text-white mx-2 text-decoration-none">Aktivitas</a>
        <a href="#" class="text-white mx-2 text-decoration-none">Kontak</a>
    </div>
</div>
<!-- resources/views/info-nataru.blade.php -->
<!-- <div class="" style="background-image: url('/images/natal.png'); background-size: cover;"> -->
@extends('layouts.app')
@section('content')
<h2 class="text-center fw-bold mb-5" style="font-size: 2.5rem; color:rgb(212, 138, 53);">
   INFO PENUNJANG PERJALANAN
</h2>
    <div class="row justify-content-center g-4">
        @php
            $menus = [
                ['title' => 'Pantau Lalin Kota Semarang', 'image' => 'panduan.png', 'color' => 'text-danger', 'btn' => 'btn-primary'],
                ['title' => 'Pantau Lalin Tol Semarang A/B/C', 'image' => 'tariftol.png', 'color' => 'text-info', 'btn' => 'btn-info'],
                ['title' => 'Pantau Lalin Tol Semarang-Batang', 'image' => 'restarea.png', 'color' => 'text-danger', 'btn' => 'btn-warning'],
                ['title' => 'Pantau Lalin Tol Semarang-Demak', 'image' => 'kalender.png', 'color' => 'text-dark', 'btn' => 'btn-warning'],
                ['title' => 'Pantau Lalin Tol Semarang-Solo', 'image' => 'sampah.png', 'color' => 'text-warning', 'btn' => 'btn-warning'],
                ['title' => 'CCTV Non Tol Bawen-ungaran', 'image' => 'sehat.png', 'color' => 'text-success', 'btn' => 'btn-info'],
                ['title' => 'CCTV Non Tol Semarang-Kendal', 'image' => 'tiktok.png', 'color' => 'text-primary', 'btn' => 'btn-info'],
                ['title' => 'CCTV Pantauan Mudik Jateng', 'image' => '', 'color' => 'text-info', 'btn' => 'btn-primary'],
                ['title' => 'CCTV Terminal Jateng', 'image' => '', 'color' => 'text-info', 'btn' => 'btn-primary'],
                ['title' => 'CCTV Lalin Jabar', 'image' => 'sehat.png', 'color' => 'text-success', 'btn' => 'btn-info'],
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
    $link = match($menu['title']) {
        'Panduan Mudik' => 'https://drive.google.com/file/d/1qDK1UoB5go49g2kKN9jG6BePP3PpEbaR/view',
        'Info Tarif Tol' => 'https://mudik.pu.go.id/tarif_tol',
        'Rest Area' => 'https://www.jmtransjawatol.co.id/id/layanan/rest-area',
        'Kalender Event Semarang' => 'https://ppid.semarangkota.go.id/event-kota-semarang/',
        'Mudik Minim Sampah' => 'https://drive.google.com/drive/folders/1pemQeKZndsnRprNQBuDDRbLDFH_heVAR',
        'Mudik Sehat' => 'https://ayosehat.kemkes.go.id/kampanye-prioritas/mudik-sehat',
        'Info Mudik Tik Tok' => 'https://www.tiktok.com/tag/infomudik',
        'Mudik Lebaran Menyenangkan' => 'https://drive.google.com/file/d/1k1ZqSUrvpr7k-n2FCIgUFjs3WJXevzZX/view',
        'Yuk Mampir Peta Kuliner Pullau Sumatra Jawa' => 'https://drive.google.com/file/d/1348AUn-noSLkkk4q_CKTGPWGVal9LPKO/view',
        'Masjid' => '',
        default => '#',
    };
@endphp

<a href="{{ $link }}" target="_blank" class="btn {{ $menu['btn'] }} px-4 mt-3">Buka Link</a>

            </div>
        </div>
    </div> 
        @endforeach

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