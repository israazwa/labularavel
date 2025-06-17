<?php

namespace App\Http\Controllers;

use App\Models\ModelKritikSaran;
use App\Models\ModelUsersBuku;
use App\Models\ModelUsersFasil;
use Illuminate\Http\Request;

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


        $data = [
            'title' => 'Statistik Laporan',
            'fasilitas' => $modelFasilitas,
            'buku' => $modelBuku,
            'saran' => $modelSaran,
        ];

        return view('TemplateUsers/header', $data) .
            view('Users/statistik', $data) .
            view('TemplateUsers/footer');
    }
}
