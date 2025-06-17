<?php

namespace App\Http\Controllers;

use App\Models\ModelPengumuman;
use Illuminate\Http\Request;

class ControllerPengumuman extends Controller
{
    public function index()
    {
        $model = new ModelPengumuman();

        $data = [
            'title' => 'Pengumuman',
            'pengumuman' => $model->all(),
        ];
        return view('TemplateAdmin/header', $data) .
            view('Admin/pengumuman', $data) .
            view('TemplateAdmin/footer');
    }
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255',
            'pj' => 'required|string|max:100',
            'link' => 'nullable|url',
            'cp' => 'nullable|string|max:50',
        ]);

        ModelPengumuman::create([
            'content' => $request->content,
            'pj' => $request->pj,
            'tgl' => now(),
            'link' => $request->link,
            'cp' => $request->cp,
            'created' => now(),
        ]);

        return redirect()->back()->with('success', 'Pengumuman berhasil ditambahkan.');
    }
    public function delete($id)
    {
        $pengumuman = ModelPengumuman::findOrFail($id);
        $pengumuman->delete();

        return redirect()->back()->with('success', 'Pengumuman berhasil dihapus.');
    }

}
