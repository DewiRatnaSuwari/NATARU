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

<div class="container py-5">
        <h1 class="text-center text-white fw-bold py-3 rounded-pill bg-danger w-100">
            Hubungi Kami
        </h1>
    <div class="row text-center my-5 justify-content-center">
        <div class="col-md-3 mb-3">
            <div class="border border-success rounded-4 py-4 shadow-sm">
                <div class="mb-2" style="width: 30px; height: 30px; background-color: #d4edda; margin: 0 auto;"></div>
                <strong>08112681112</strong>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="border border-danger rounded-4 py-4 shadow-sm">
                <div class="mb-2" style="width: 30px; height: 30px; background-color: #f8d7da; margin: 0 auto;"></div>
                <strong>infomudik@semarangkota.go.id</strong>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="border border-warning rounded-4 py-4 shadow-sm">
                <div class="mb-2" style="width: 30px; height: 30px; background-color: #ffe5b4; margin: 0 auto;"></div>
                <strong>Jl.Pemuda No.148, Kota Semarang</strong>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="border border-primary rounded-4 py-4 shadow-sm">
                <div class="mb-2" style="width: 30px; height: 30px; background-color: #cfe2ff; margin: 0 auto;"></div>
                <strong>Call Center Darurat 112</strong>
            </div>
        </div>
    </div>

    <div class="my-5">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.612595995497!2d110.4112351!3d-6.9836394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4fd277d06b%3A0x4056bfa9e8303c06!2sDinas%20Kominfo%20Kota%20Semarang!5e0!3m2!1sid!2sid!4v1712747850149!5m2!1sid!2sid" 
        width="100%" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
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
@endsection
