<!-- resources/views/info-nataru.blade.php -->
@extends('layouts.app')

@section('content')
<style>
    body {
        background: url('/images/bg-natal.jpg') no-repeat center center fixed;
        background-size: cover;
    }
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 10px;
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

<div class="nav-bar d-flex justify-content-between">
    <div><strong>LOGO NANTI</strong></div>
    <div>
        <a href="{{ url('/NATARU') }}" class="text-white mx-2 text-decoration-none">Home</a>
        <a href="#" class="text-white mx-2 text-decoration-none">About us</a>
        <a href="/panduan-mudik" class="text-white mx-2 text-decoration-none">Panduan mudik</a>
        <a href="#" class="text-white mx-2 text-decoration-none">Aktivitas</a>
        <a href="info-kontak" class="text-white mx-2 text-decoration-none">Kontak</a>
    </div>
</div>
<!-- resources/views/info-nataru.blade.php -->
<!-- <div class="" style="background-image: url('/images/natal.png'); background-size: cover;"> -->
@extends('layouts.app')
@section('content')
<h2 class="text-center fw-bold mb-5" style="font-size: 2.5rem; color:rgb(212, 138, 53);">
    LAYANAN DARURAT
</h2>
    <div class="row justify-content-center g-4">
        @php
            $menus = [
                ['title' => 'lapor semar', 'image' => 'lapor-semar.png', 'color' => 'text-danger', 'btn' => 'btn-primary'],
                ['title' => 'layanan darurat 112', 'image' => 'layanan-darurat-112.png', 'color' => 'text-info', 'btn' => 'btn-info'],
                ['title' => 'libas(polisi hebat semarang)', 'image' => 'LIBAS (2).png', 'color' => 'text-danger', 'btn' => 'btn-warning'],
                ['title' => 'posko thr', 'image' => 'posko-thr.png', 'color' => 'text-dark', 'btn' => 'btn-warning'],
                ['title' => 'rescue 115 basarnas', 'image' => 'rescue-115-basarnas.png', 'color' => 'text-warning', 'btn' => 'btn-warning'],
            ];
        @endphp

    @foreach ($menus as $menu)
        @php
            $titleLower = strtolower($menu['title']);
            $link = match($titleLower) {
                'lapor semar' => 'https://laporsemar.semarangkota.go.id/jelajahaduan?page=3',
                'layanan darurat 112' => 'https://linktr.ee/callcenter112',
                'libas(polisi hebat semarang)' => 'https://play.google.com/store/apps/details?id=com.cancreative.psis_masyarakat&pcampaignid=web_share',
                'posko thr' => 'https://poskothr.kemnaker.go.id/dashboard',
                'rescue 115 basarnas' => 'https://play.google.com/store/apps/details?id=com.basarnas.rescue115',
                default => '#'
            };
        @endphp

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
                    <a href="{{ $link }}" target="_blank" class="btn {{ $menu['btn'] }} px-4 mt-3">Buka Link</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<footer class="bg-primary py-5 mt-5">
    <div class="container">
        <h4 class="text-white text-center mb-4">LINK TERKAIT</h4>
        <div class="row justify-content-around">
            @foreach (['Semarang.go.id', 'Layanan Darurat 112', 'Lapor Semar'] as $title)
            <div class="col-md-3 text-center">
                <button class="btn btn-light mb-3 text-primary fw-bold shadow-sm">
                    @if ($title === 'Semarang.go.id')
                        <i class="bi bi-globe2"></i>
                    @elseif ($title === 'Layanan Darurat 112')
                        <i class="bi bi-telephone-forward me-2"></i>
                    @else
                        <i class="bi bi-pin-map"></i>
                    @endif
                    {{ $title }}
                </button>
                <ul class="text-white list-unstyled">
                    <li>08112681112</li>
                    <li>Call Center Darurat 112</li>
                    <li>infomudik@semarangkota.go.id</li>
                    <li>Jl. Pemuda No.148, Kota Semarang</li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</footer>
@endsection
