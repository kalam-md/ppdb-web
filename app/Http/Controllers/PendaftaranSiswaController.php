<?php

namespace App\Http\Controllers;

use App\Models\PendaftaranSiswa;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class PendaftaranSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.ppdb.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'nik' => 'required|unique:pendaftaran_siswas',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_kartu_keluarga' => 'required',
            'foto_kartu_keluarga' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'nama_ayah' => 'required',
            'nik_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'nik_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
        ]);

        // Generate slug dari nama
        $validatedData['slug'] = SlugService::createSlug(PendaftaranSiswa::class, 'slug', $validatedData['nama_lengkap']);

        // Upload foto kartu keluarga
        if ($request->hasFile('foto_kartu_keluarga')) {
            $file = $request->file('foto_kartu_keluarga');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/photo/', $filename);
            $validatedData['foto_kartu_keluarga'] = $filename;
        }

        // Tambahkan user_id
        $validatedData['user_id'] = Auth::user()->id;

        PendaftaranSiswa::create($validatedData);

        alert()->success('Pendaftaran berhasil!', 'Data pendaftaran siswa berhasil disimpan');
        return redirect()->route('pendaftaran-siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $pendaftaran = PendaftaranSiswa::where('slug', $slug)->firstOrFail();

        return view('dashboard.ppdb.show', [
            'pendaftaran' => $pendaftaran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $pendaftaran = PendaftaranSiswa::where('slug', $slug)->firstOrFail();

        return view('dashboard.ppdb.edit', [
            'pendaftaran' => $pendaftaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $pendaftaran = PendaftaranSiswa::where('slug', $slug)->firstOrFail();

        $validatedData = $request->validate([
            'nama_lengkap' => 'required|max:255',
            'nik' => 'required|unique:pendaftaran_siswas,nik,' . $pendaftaran->id,
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'no_kartu_keluarga' => 'required',
            'foto_kartu_keluarga' => 'image|mimes:jpeg,png,jpg|max:2048',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'kewarganegaraan' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'nama_ayah' => 'required',
            'nik_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'nik_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
        ]);

        // Update slug only if nama_lengkap changes
        if ($pendaftaran->nama_lengkap !== $validatedData['nama_lengkap']) {
            $validatedData['slug'] = SlugService::createSlug(PendaftaranSiswa::class, 'slug', $validatedData['nama_lengkap']);
        }

        // Handle file upload
        if ($request->hasFile('foto_kartu_keluarga')) {
            // Delete old file if exists
            if ($pendaftaran->foto_kartu_keluarga && file_exists(public_path('photo/' . $pendaftaran->foto_kartu_keluarga))) {
                unlink(public_path('photo/' . $pendaftaran->foto_kartu_keluarga));
            }
    
            // Upload new file
            $file = $request->file('foto_kartu_keluarga');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('photo/'), $filename);
            $validatedData['foto_kartu_keluarga'] = $filename;
        }

        // Update the record
        $pendaftaran->update($validatedData);

        alert()->success('Pendaftaran berhasil diupdate!', 'Data pendaftaran siswa berhasil diperbarui');
        return redirect()->route('pendaftaran-siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateStatus(Request $request, $id)
    {
        $status = $request->status;

        $ppdb = PendaftaranSiswa::findOrFail($id);
        $ppdb->status = $status;
        $ppdb->save();

        return response()->json(['message' => 'Status berhasil diubah menjadi ' . $status]);
    }

    public function cetak(string $slug)
    {
        $pendaftaran = PendaftaranSiswa::where('slug', $slug)->firstOrFail();
        $pdf = PDF::loadView('dashboard.ppdb.cetak', compact('pendaftaran'));
        return $pdf->stream('pendaftaran-siswa.pdf');
    }
}
