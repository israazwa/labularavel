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
}
