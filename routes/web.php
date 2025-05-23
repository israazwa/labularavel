<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerAdminBuku;
use App\Http\Controllers\ControllerAdminFasil;
use App\Http\Controllers\ControllerHeroPic;
use App\Http\Controllers\ControllerHomeAdmin;
use App\Http\Controllers\ControllerUsersAbout;
use App\Http\Controllers\ControllerUsersHome;
use App\Http\Controllers\ControllerUsersLaporanFasilitas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUsersLaporanBuku;

Route::get('/debug', function () {
    return view('welcome');
});

Route::get('/', [ControllerUsersHome::class, 'index']);

Route::get('/about', [ControllerUsersAbout::class, 'index']);

Route::get('/laporan/buku', [ControllerUsersLaporanBuku::class, 'index'])->name('laporanbuku');
Route::POST('/laporan/buku/kirim', [ControllerUsersLaporanBuku::class, 'store']);

Route::get('/laporan/fasilitas', [ControllerUsersLaporanFasilitas::class, 'index']);
Route::post('/laporan/fasilitas1', [ControllerUsersLaporanFasilitas::class, 'store'])->name('storeLaporanFasil');
Route::put('/fasilitas/update/{id}', [ControllerUsersLaporanFasilitas::class, 'update'])->name('fasilitas.update');
Route::delete('/fasilitas/delete/{id}', [ControllerUsersLaporanFasilitas::class, 'destroy'])->name('fasilitas.destroy');

Route::get('/admin', [ControllerHomeAdmin::class, 'index']);
Route::put('/ikhtisarupt/{id}', [ControllerHomeAdmin::class, 'update'])->name('ikhtisar.update');

Route::get('/admin/fasil', [ControllerAdminFasil::class, 'index']);
Route::get('/detailfasil/{id}', [ControllerAdminFasil::class, 'ingfoo'])->name('detailfasil');

Route::get('/admin/buku', [ControllerAdminBuku::class, 'index']);
Route::get('/detailbuku/{id}', [ControllerAdminBuku::class, 'ingfoo'])->name('detailbuku');

Route::get('/admin/heropic', [ControllerHeroPic::class, 'index']);