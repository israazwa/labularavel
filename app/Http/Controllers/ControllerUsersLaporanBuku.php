<?php

namespace App\Http\Controllers;

use App\Models\ModelUsersBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerUsersLaporanBuku extends Controller
{

    public function index()
    {
        $datbok = new ModelUsersBuku();
        $record = $datbok::all();

        $data = [
            'title' => 'LaporBuku || Labu',
            'record' => $record,
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
            $image->storeAs('public/uploads/fasilitas', $fileName);
        }

        // Simpan ke database dengan input yang difilter
        ModelUsersBuku::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'jenis' => $request->input('jenis'),
            'buku' => $request->input('buku'),
            'masalah' => $request->input('masalah'),
            'foto' => $fileName ? 'uploads/fasilitas/' . $fileName : null,
            'created_at' => now(),
            'created' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Data laporan berhasil disimpan!');
    }
}
