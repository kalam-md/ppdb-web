<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('dashboard.blog.index', [
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'desc' => 'required|string',
        ]);

        $validatedData['slug'] = SlugService::createSlug(Blog::class, 'slug', $validatedData['judul']);
    
        // Menyimpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img-blogs', 'public');
        }
    
        $validatedData['image'] = $imagePath;

        Blog::create($validatedData);
    
        alert()->success('Sukses', 'Blog berhasil dibuat!');
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('dashboard.blog.show', [
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('dashboard.blog.edit', [
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
            'desc' => 'required|string',
        ]);

        // Jika judul diubah, buat slug baru
        if ($blog->judul !== $validatedData['judul']) {
            $validatedData['slug'] = SlugService::createSlug(Blog::class, 'slug', $validatedData['judul']);
        }

        // Menyimpan gambar baru jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($blog->image && Storage::exists('public/' . $blog->image)) {
                Storage::delete('public/' . $blog->image);
            }
            // Simpan gambar baru
            $validatedData['image'] = $request->file('image')->store('img-blogs', 'public');
        }

        // Update data blogs
        $blog->update($validatedData);

        alert()->success('Sukses', 'Blog berhasil diperbarui!');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        if ($blog->image && Storage::exists('public/' . $blog->image)) {
            Storage::delete('public/' . $blog->image);
        }
    
        // Hapus blog
        $blog->delete();
    
        alert()->success('Sukses', 'Blog berhasil dihapus!');
        return redirect()->route('blog.index');
    }
}
