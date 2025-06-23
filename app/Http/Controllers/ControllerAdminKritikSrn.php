<?php

namespace App\Http\Controllers;

use App\Models\ModelKritikSaran;
use Illuminate\Http\Request;

class ControllerAdminKritikSrn extends Controller
{
    public function index()
    {
        $model = new ModelKritikSaran();
        $modelkritik = $model->all();
        $data = [
            'title' => 'Kritik Saran',
            'n1' => $modelkritik
        ];
        return view('TemplateAdmin/header', $data) .
            view('Admin/KritikSaran', $data) .
            view('TemplateAdmin/footer');
    }
}
