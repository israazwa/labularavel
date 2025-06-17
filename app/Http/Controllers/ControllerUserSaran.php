<?php

namespace App\Http\Controllers;

use App\Models\ModelKritikSaran;
use Illuminate\Http\Request;

class ControllerUserSaran extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Saran",
        ];

        echo view('TemplateUsers/header', $data);
        echo view('Users/KritikSaran', $data);
        return view('TemplateUsers/footer', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'saran' => 'required',
        ]);
        ModelKritikSaran::create([
            'email' => $request->input('email'),
            'content' => $request->input('saran'),
        ]);
        return redirect()->back()->with('success', 'Saran berhasil dikirim!');
    }
}
