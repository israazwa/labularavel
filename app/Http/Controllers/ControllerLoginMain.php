<?php

namespace App\Http\Controllers;

use App\Models\ModelUsers;
use App\Models\User;
use Illuminate\Contracts\Hashing\Hasher;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ControllerLoginMain extends Controller
{
    public function index()
    {

        $data = [
            'title' => 'Login'
        ];
        return
            view('TemplateUsers/header', $data) .
            view('LoginUtama', $data);

    }
    public function regis()
    {
        $data = [
            'title' => "registrasi"
        ];
        return view('TemplateUsers/header', $data) .
            view('RegisUtama', $data);
    }
    public function regisUp(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email:dns', 'unique:users,email'],
            'password' => ['required', 'min:2'],
            'name' => ['required', 'min:3']
        ]);

        // Simpan data ke database
        ModelUsers::create([
            'email' => $validated['email'],
            'name' => $validated['name'],
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()->back()->with('success', 'Registrasi berhasil!');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Hapus session login
        $request->session()->invalidate(); // Invalidate session
        $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect('/login')->with('success', 'Berhasil logout!');
    }

}