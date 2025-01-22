<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pendaftaran = $user->pendaftaran_siswa()->first();

        return view('dashboard.index', [
            'hasPendaftaran' => $pendaftaran !== null,
            'pendaftaran' => $pendaftaran,
        ]);
    }
}
