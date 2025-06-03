<?php

namespace App\Http\Controllers;

use App\Models\ModelUsersBuku;
use Illuminate\Http\Request;

class ControllerAdminBuku extends Controller
{
    public function index()
    {
        $modelfasil = new ModelUsersBuku();
        $laporanfasil = $modelfasil->paginate(5);

        $data = [
            'title' => "Laporan Buku || Admin",
            'konten' => $laporanfasil,
            'data' => $laporanfasil,
        ];

        echo view('TemplateAdmin/header', $data);
        echo view('Admin/Buku', $data);

        return view('TemplateAdmin/footer', $data);
    }

    public function ingfoo($id)
    {
        $model = new ModelUsersBuku();
        $fsl = $model->find($id);
        $data = [
            'title' => "Detail Laporan Buku",
            'key' => [$fsl],
        ];
        echo view('TemplateAdmin/header', $data);
        echo view('TemplateAdmin/DetailBuku', $data);
        return view('TemplateAdmin/footer');
    }
    public function destroy($id)
    {
        $model = ModelUsersBuku::findOrFail($id);

        // Hapus file gambar jika ada
        if ($model->foto && file_exists(public_path('uploads/buku/' . $model->foto))) {
            unlink(public_path('uploads/buku/' . $model->foto));
        }

        // Hapus data dari database
        $model->delete();
        return redirect('/admin/buku')->with('success', 'Data berhasil dihapus!');
    }
}
