<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index() {
        $user = Auth::user();
        return view('dashboard.profil.index', compact('user'));
    }

    public function update(Request $request) {
        $request->validate([
            'nik' => 'required|string|unique:users,nik,' . Auth::id(),
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $data = [
            'nik' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'username' => $request->username,
        ];

        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }

        User::where('id', Auth::id())->update($data);

        alert()->success('Sukses', 'Profil berhasil diperbarui');

        return redirect()->route('profil.index');
    }
}
