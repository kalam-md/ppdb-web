<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function daftar()
    {
        return view('auth.daftar');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        // Coba login dengan NIK
        if (Auth::attempt(['nik' => $request->login, 'password' => $request->password])) {
            $request->session()->regenerate();
            alert()->success('Login berhasil', 'Selamat Datang!');
            return redirect()->route('dashboard');
        }

        // Jika gagal, coba login dengan username
        if (Auth::attempt(['username' => $request->login, 'password' => $request->password])) {
            $request->session()->regenerate();
            alert()->success('Login berhasil', 'Selamat Datang!');
            return redirect()->route('dashboard');
        }

        alert()->error('Login gagal', 'Periksa kembali NIK/username dan password anda');
        return back();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|unique:users,nik',
            'nama_lengkap' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6|confirmed',
        ]);

        $validatedData['password'] = Hash::make($request->password);

        User::create($validatedData);

        alert()->success('Pendaftaran berhasil', 'Silahkan login!');
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
