<?php

use Illuminate\Support\Facades\Route;


Route::get('/NATARU', function () {
    return view('info');
});

Route::get('/panduan-mudik', function () {
    return view('pages.panduan-mudik');
});

Route::get('/cctv-nataru', function () {
    return view('pages.cctv-nataru');
});

Route::get('/layanan-darurat', function () {
    return view('pages.layanan-darurat');
});

Route::get('/pos-komando', function () {
    return view('pages.pos-komando');
});

Route::get('/info-perjalanan', function () {
    return view('pages.info-perjalanan');
});

Route::get('/info-wisata', function () {
    return view('pages.info-wisata');
});

Route::get('/info-hotel', function () {
    return view('pages.info-hotel');
});

Route::get('/info-cafe', function () {
    return view('pages.info-cafe');
});

Route::get('/info-hiburan', function () {
    return view('pages.info-hiburan');
});

Route::get('/info-transport', function () {
    return view('pages.info-transport');
});

Route::get('/info-lain', function () {
    return view('pages.info-lain');
});

Route::get('/info-kontak', function () {
    return view('pages.info-kontak');
});

Route::get('/', function () {
    return view('welcome');
});
