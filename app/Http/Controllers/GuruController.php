<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index() 
    {
        $gurus = User::where('role', 'guru')->get();
        return view('dashboard.guru.index', [
            'gurus' => $gurus
        ]);
    }
}
