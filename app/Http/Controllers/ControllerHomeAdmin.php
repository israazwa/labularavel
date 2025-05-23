<?php

namespace App\Http\Controllers;

use App\Models\ModelHeroPic;
use App\Models\ModelIkhtisar;
use Illuminate\Http\Request;

class ControllerHomeAdmin extends Controller
{
    public function index()
    {

        $ikh = new ModelIkhtisar();
        $ikhtisar = $ikh->all();

        $data = [
            'title' => 'Admin Dashboard',
            'content' => $ikhtisar,
        ];
        echo view('TemplateAdmin/Header', $data);
        echo view('Admin/Home', $data);
        return view('TemplateAdmin/Footer');
    }

    public function store(Request $request)
    {
        ModelIkhtisar::create([
            'content' => $request->input('contents'),
            'created' => now()
        ]);
    }
    public function update(Request $request, $id)
    {
        $model = ModelIkhtisar::findOrFail($id);

        $model->update([
            'content' => $request->input('contents'),
            'updated' => now()
        ]);

        return redirect('/admin')->with('success', 'Data ikhtisar berhasil diperbarui!');
    }
}



// function hashPassword($password) {
//     return password_hash($password, PASSWORD_DEFAULT);
// }

// // Contoh penggunaan
// $plainPassword = "Rahasia123";
// $hashedPassword = hashPassword($plainPassword);

// echo "Password asli: " . $plainPassword . "\n";
// echo "Password yang di-hash: " . $hashedPassword . "\n";

