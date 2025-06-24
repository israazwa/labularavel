<?php

namespace App\Http\Controllers;

use App\Models\ModelPeminjam;
use App\Models\ModelUsersBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ControllerUsersLaporanBuku extends Controller
{

    public function index()
    {
        $datbok = new ModelUsersBuku();
        $record = $datbok::all();

        $modelk = new ModelPeminjam();
        $pinjm = $modelk::all();
        $data = [
            'title' => 'LaporBuku || Labu',
            'record' => $record,
            'peminnjam' => $pinjm,
        ];

        echo view('TemplateUsers/header', $data);
        echo view('Users/LaporanBuku', $data);
        return view('TemplateUsers/footer');

    }
    public function store(Request $request)
    {
        // Inisialisasi variabel fileName
        $fileName = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image'); // Pastikan sesuai dengan input form
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/uploads/buku'), $fileName);
        }

        // Simpan ke database dengan input yang difilter
        ModelUsersBuku::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'jenis' => $request->input('jenis'),
            'buku' => $request->input('buku'),
            'masalah' => $request->input('masalah'),
            'foto' => $fileName ? 'uploads/buku/' . $fileName : null,
            'kodebuku' => $request->input('kdbo'),
            'created_at' => now(),
            'created' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Data laporan berhasil disimpan!');
    }

    public function cari(Request $request)
    {
        // 1. Validasi input
        $request->validate([
            'email' => 'required|email',
        ]);

        // 2. Ambil record terbaru
        $latest = ModelPeminjam::where('email', $request->email)
            ->orderBy('created_at', 'desc')
            ->first();

        // 3. Kalau tidak ada
        if (!$latest) {
            return back()->with('alert', 'Data pengguna tidak ditemukan.');
        }

        // 4. Hitung selisih menit
        $created = $latest->created_at;
        $submitted = Carbon::now();
        // $diffMinutes = $created->diffInMinutes($submitted);
        $diffMinutes = $created->diffInRealMinutes($submitted);

        // 5. Cek kadaluarsa >x menit
        if ($diffMinutes > 60) {
            return back()->with('alert', 'Data pengguna sudah kadaluarsa (>10 menit).');
        }

        // 6. Ambil daftar buku
        $bookNames = ModelPeminjam::where('email', $request->email)
            ->pluck('kdbuku')
            ->toArray();

        // 7. Kirim response sukses
        return back()->with([
            'success' => 'Data ditemukan dan masih valid.',
            'email' => $request->email,
            'nama' => $latest->nama,
            'buku' => $bookNames,
        ]);
    }

}
