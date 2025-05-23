<?php

namespace App\Http\Controllers;

use App\Models\ModelUsersFasil;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerUsersLaporanFasilitas extends Controller
{
    public function index()
    {

        $data = [
            'title' => "laporan fasilitas",
        ];
        echo view('TemplateUsers/header', $data);
        echo view('Users/LaporanFasilitas', $data);
        echo view('TemplateUsers/footer');
        return 0;
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $fileName = null;


        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fileName = uniqid() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('/uploads/fasilitas'), $fileName);
        }

        ModelUsersFasil::create([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'jenis' => $request->input('jenis'),
            'buku' => $request->input('buku'),
            'masalah' => $request->input('masalah'),
            'foto' => $fileName ? 'uploads/fasilitas/' . $fileName : null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        return redirect()->back()->with('success', 'Data laporan berhasil disimpan!');
    }

    public function update(Request $request, $id)
    {
        $model = ModelUsersFasil::findOrFail($id);

        $fileName = $model->foto; // Simpan nama file lama jika tidak ada perubahan

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/uploads/fasilitas', $fileName);
        }

        $model->update([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'jenis' => $request->input('jenis'),
            'buku' => $request->input('buku'),
            'masalah' => $request->input('masalah'),
            'foto' => $fileName ? 'uploads/fasilitas/' . $fileName : $model->foto,
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Data laporan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $model = ModelUsersFasil::findOrFail($id);

        // Hapus file gambar jika ada
        if ($model->foto && file_exists(public_path('uploads/fasilitas/' . $model->foto))) {
            unlink(public_path('uploads/fasilitas/' . $model->foto));
        }

        // Hapus data dari database
        $model->delete();
        return redirect('/admin/fasil')->with('success', 'Data berhasil dihapus!');
    }

}
