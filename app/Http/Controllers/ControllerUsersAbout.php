<?php

namespace App\Http\Controllers;

use App\Models\ModelHeroPic;
use Illuminate\Http\Request;

class ControllerUsersAbout extends Controller
{

    public static function index(): mixed
    {
        $n1 = new ModelHeroPic();
        $n2 = $n1::getAll();


        $data = [
            'dataset' => $n2,
            'title' => 'About Labu'
        ];

        echo view('TemplateUsers/header', $data);
        echo view('Users/About', $data);
        echo view('TemplateUsers/MainAbout', $data);

        return view('TemplateUsers/footer', $data);
    }

}
