<?php

namespace App\Http\Controllers;

use App\Models\ModelHeroPic;
use Illuminate\Http\Request;

class ControllerHeroPic extends Controller
{
    public function index()
    {
        $model = new ModelHeroPic();
        $pic = $model->all();

        $data = [
            'hero' => $pic,
            'title' => "Update Hero Section",
        ];

        echo view('TemplateAdmin/Header', $data);
        echo view('Admin/HeroPicture', $data);
        return view('TemplateAdmin/Footer', $data);
    }
}
