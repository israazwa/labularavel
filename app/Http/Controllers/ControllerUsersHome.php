<?php

namespace App\Http\Controllers;

use App\Models\ModelHeroPic;
use App\Models\ModelIkhtisar;
use App\Models\ModelPengumuman;
use Illuminate\Http\Request;
use View;

class ControllerUsersHome extends Controller
{
    public static function index(): mixed
    {

        $na = new ModelIkhtisar();
        $chi = $na::getAll();

        $el = new ModelHeroPic();
        $hero = $el::getAll();

        $fl = new ModelPengumuman();
        $jhon = $fl::getAll();

        $data = [
            'pengumuman' => $jhon,
            'ikhtisar' => $chi,
            'dataset' => $hero,
            'title' => 'Home',
        ];
        echo view('TemplateUsers/header', data: $data);
        echo view('Users/home', $data);
        echo view('TemplateUsers/HomeFitur', data: $data);
        echo view('TemplateUsers/pengumuman', $data);
        return view('TemplateUsers/footer', data: $data);
    }
}
