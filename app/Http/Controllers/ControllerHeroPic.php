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

    public function store(Request $request)
    {
        if (!$request->hasFile('image')) {
            return redirect()->back()->with('error', 'Data tidak masuk!');
        }

        $image = $request->file('image');
        $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('home/'), $fileName);

        ModelHeroPic::create([
            'content' => $fileName,
            'created' => now(),
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    public function delete($id)
    {
        $model = ModelHeroPic::findOrFail($id);

        if ($model->content && file_exists(public_path('home/' . $model->content))) {
            unlink(public_path('home/' . $model->content));
        } else {
            echo "ok";
        }
        $model->delete();
        return redirect('/admin/heropic')->with('success', 'Data berhasil dihapus!');
    }
}
