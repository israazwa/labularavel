<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerAdminBuku;
use App\Http\Controllers\ControllerAdminFasil;
use App\Http\Controllers\ControllerHeroPic;
use App\Http\Controllers\ControllerHomeAdmin;
use App\Http\Controllers\ControllerPengumuman;
use App\Http\Controllers\ControllerUsersAbout;
use App\Http\Controllers\ControllerUserSaran;
use App\Http\Controllers\ControllerUsersHome;
use App\Http\Controllers\ControllerUsersLaporanFasilitas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerUsersLaporanBuku;
use App\Http\Controllers\ControllerUsersStatistik;
use App\Http\Controllers\Admin\login;
use App\Http\Controllers\ControllerAdminKritikSrn;
use App\Http\Controllers\ControllerLoginMain;

Route::get('/debug', function () {
    return view('welcome');
});

Route::get('/', [ControllerUsersHome::class, 'index']);

Route::get('/about', [ControllerUsersAbout::class, 'index']);

Route::get('/laporan/buku', [ControllerUsersLaporanBuku::class, 'index'])->name('laporanbuku');
Route::POST('/laporan/buku/kirim', [ControllerUsersLaporanBuku::class, 'store']);
route::POST('/cari', [ControllerUsersLaporanBuku::class, 'cari'])->name('cari');


Route::get('/laporan/fasilitas', [ControllerUsersLaporanFasilitas::class, 'index']);
Route::post('/laporan/fasilitas1', [ControllerUsersLaporanFasilitas::class, 'store'])->name('storeLaporanFasil');
Route::put('/fasilitas/update/{id}', [ControllerUsersLaporanFasilitas::class, 'update'])->name('fasilitas.update');
Route::delete('/fasilitas/delete/{id}', [ControllerUsersLaporanFasilitas::class, 'destroy'])->name('fasilitas.destroy');


Route::get('/admin', [ControllerHomeAdmin::class, 'index'])->middleware('auth');
Route::put('/ikhtisarupt/{id}', [ControllerHomeAdmin::class, 'update'])->name('ikhtisar.update');
route::get('/admin/saran', [ControllerAdminKritikSrn::class, 'index'])->name('admin.kritik')->middleware('auth');

Route::get('/admin/fasil', [ControllerAdminFasil::class, 'index'])->middleware('auth');
Route::get('/detailfasil/{id}', [ControllerAdminFasil::class, 'ingfoo'])->name('detailfasil');
Route::post('/kirimfs', [ControllerAdminFasil::class, 'kirim'])->name('fasilitas.kirim');

Route::get('/saran', [ControllerUserSaran::class, 'index']);
route::post('/saran/kirim', [ControllerUserSaran::class, 'store'])->name('saran.store');

Route::get('/admin/buku', [ControllerAdminBuku::class, 'index'])->middleware('auth');
Route::get('/detailbuku/{id}', [ControllerAdminBuku::class, 'ingfoo'])->name('detailbuku');
Route::delete('/buku/delete/{id}', [ControllerAdminBuku::class, 'destroy'])->name('buku.destroy');

Route::get('/admin/heropic', [ControllerHeroPic::class, 'index'])->middleware('auth');
route::delete('/admin/heropic/delete/{id}', [ControllerHeroPic::class, 'delete']);
route::post('/admin/heropic/store', [ControllerHeroPic::class, 'store']);

route::get('/admin/pengumuman', [ControllerPengumuman::class, 'index'])->middleware('auth');
route::post('/admin/pengumuman/store', [ControllerPengumuman::class, 'store'])->name('pengumuman.store');
route::delete('/admin/pengumuman/delete/{id}', [ControllerPengumuman::class, 'delete'])->name('pengumuman.delete');
Route::post('/kirimbk', [ControllerAdminBuku::class, 'aplot'])->name('buku.kirim');

route::get('/stats', [ControllerUsersStatistik::class, 'index']);
Route::post('/stats/search', [ControllerUsersStatistik::class, 'search'])->name('stats.search');

route::Post('/logout', [ControllerLoginMain::class, 'logout'])->name('logout');
route::get('/login', [ControllerLoginMain::class, 'index'])->name('login');
route::get('/regis', [ControllerLoginMain::class, 'regis'])->name('regis')->middleware('auth');
route::post('/login', [ControllerLoginMain::class, 'authenticate'])->name('authenticate');
route::post('/regisUp', [ControllerLoginMain::class, 'regisUp'])->name('regisUp')->middleware('auth');

