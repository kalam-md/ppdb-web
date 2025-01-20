<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranSiswa;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function index()
    {
        $ppdb_all = PendaftaranSiswa::all();
        return view('dashboard.ppdb.admin_index', [
            'ppdb_all' => $ppdb_all
        ]);
    }
}
