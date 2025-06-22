<?php

namespace App\Http\Controllers;

use App\Models\ModelUsersFasil;
use Illuminate\Http\Request;

class ControllerAdminFasil extends Controller
{
    public function index()
    {
        $modelfasil = new ModelUsersFasil();
        $laporanfasil = $modelfasil->paginate(5);

        $data = [
            'title' => "Laporan Fasil || Admin",
            'konten' => $laporanfasil,
            'data' => $laporanfasil,
        ];

        echo view('TemplateAdmin/header', $data);
        echo view('Admin/Fasil', $data);

        return view('TemplateAdmin/footer', $data);
    }

    public function ingfoo($id)
    {
        $model = new ModelUsersFasil();
        $fsl = $model->find($id);
        $data = [
            'title' => "Detail Laporan Fasil",
            'key' => [$fsl],
        ];
        echo view('TemplateAdmin/header', $data);
        echo view('TemplateAdmin/DetailFasil', $data);
        return view('TemplateAdmin/footer');
    }
    public function kirim(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'content' => 'required',
        ]);

        $row = ModelUsersFasil::find($validated['id']);
        $row->content = $validated['content'];
        $row->save();

        return redirect()->back()->with('success', 'Data berhasil diperbarui berdasarkan ID!');
    }
}
