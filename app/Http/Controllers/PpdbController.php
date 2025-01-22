<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranSiswa;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $ppdb_all = PendaftaranSiswa::query()
            ->when($search, function ($query, $search) {
                $query->where('nama_lengkap', 'like', "%{$search}%")
                    ->orWhere('nik', 'like', "%{$search}%");
            })
            ->get();

        return view('dashboard.ppdb.admin_index', [
            'ppdb_all' => $ppdb_all
        ]);
    }
}
