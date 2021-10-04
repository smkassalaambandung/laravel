<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 100;
});

Route::get('laravel/framework', function () {
    return 'hallo laravel';
});

// Parameter Wajib
Route::get('/nama-framework/{nama}/{tahun}', function ($nama, $tahun) {
    return 'Nama Framework yang dimasukan adalah: ' . $nama .
        '<br>Tahun <b>Rilis</b> : ' . $tahun;
});


// Optional Parameter
Route::get('/nama-saya-adalah/{nama?}', function ($nama = 'Wajib Diisi') {
    return 'Nama Saya Adalah : ' . $nama;
});

// url : hitung luas segitiga
// optional param : alas, tinggi
// output : hasil luas segitiga nya :
// alas = null : 1, tinggi = null : 1
Route::get('/luas-segitiga/{alas?}/{tinggi?}', function ($alas = 1, $tinggi = 1) {
    return 'Luas Segitiga : ' . ($alas * $tinggi) * 0.5;
});
