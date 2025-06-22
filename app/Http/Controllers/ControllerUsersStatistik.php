<?php

namespace App\Http\Controllers;

use App\Models\ModelKritikSaran;
use App\Models\ModelUsersBuku;
use App\Models\ModelUsersFasil;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ControllerUsersStatistik extends Controller
{
    public function index()
    {
        $modelFs = new ModelUsersFasil();
        $modelFasilitas = $modelFs->all();

        $modelBk = new ModelUsersBuku();
        $modelBuku = $modelBk->all();

        $modelSr = new ModelKritikSaran();
        $modelSaran = $modelSr->all();

        // Kelompokkan per jenis fasilitas dan tanggal
        $fasilitasJenis = [];
        $fasilitasPerTanggal = [];

        foreach ($modelFasilitas as $item) {
            $jenis = $item['jenis_fasilitas'];
            $tanggal = Carbon::parse($item['created_at'])->format('Y-m-d');

            $fasilitasJenis[$jenis] = ($fasilitasJenis[$jenis] ?? 0) + 1;
            $fasilitasPerTanggal[$tanggal] = ($fasilitasPerTanggal[$tanggal] ?? 0) + 1;
        }

        // Kelompokkan per kategori buku dan tanggal
        $bukuKategori = [];
        $bukuPerTanggal = [];

        foreach ($modelBuku as $item) {
            $kategori = $item['kategori_buku'];
            $tanggal = Carbon::parse($item['created_at'])->format('Y-m-d');

            $bukuKategori[$kategori] = ($bukuKategori[$kategori] ?? 0) + 1;
            $bukuPerTanggal[$tanggal] = ($bukuPerTanggal[$tanggal] ?? 0) + 1;
        }

        // Saran per tanggal
        $saranPerTanggal = [];

        foreach ($modelSaran as $item) {
            $tanggal = Carbon::parse($item['created_at'])->format('Y-m-d');
            $saranPerTanggal[$tanggal] = ($saranPerTanggal[$tanggal] ?? 0) + 1;
        }

        // Gabungkan semua tanggal untuk chart
        $allDates = array_unique(array_merge(
            array_keys($fasilitasPerTanggal),
            array_keys($bukuPerTanggal),
            array_keys($saranPerTanggal)
        ));
        sort($allDates);

        $keyword = '';
        $data = [
            'title' => 'Statistik Laporan Harian',
            'fasilitas' => $modelFasilitas,
            'fasilitas_jenis' => $fasilitasJenis,
            'buku' => $modelBuku,
            'buku_kategori' => $bukuKategori,
            'saran' => $modelSaran,
            'dates' => $allDates,
            'data_fasilitas' => $fasilitasPerTanggal,
            'data_buku' => $bukuPerTanggal,
            'data_saran' => $saranPerTanggal,
            'keyword' => $keyword
        ];

        return view('TemplateUsers/header', $data) .
            view('Users/search', $data) .
            view('Users/statistik', $data) .
            view('TemplateUsers/footer');
    }
    public function search(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $hasilFs = ModelUsersFasil::where('email', $request->email)->first();
        $hasilBk = ModelUsersBuku::where('email', $request->email)->first();
        if (!$hasilFs && !$hasilBk) {
            return redirect()->back()->with('alert', 'Data pengguna tidak ditemukan di tabel Fasil dan Buku.');
        }

        return redirect()->back()->with([
            'hasilFs' => $hasilFs,
            'hasilBk' => $hasilBk,
            'keyword' => $request->email,
        ]);
    }

}