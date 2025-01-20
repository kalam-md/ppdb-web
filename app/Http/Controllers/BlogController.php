<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;




class BlogController extends Controller
{
    # fungsi index
    public function index()
    {
        return view('admin.blog.index', [
            'artikels' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    # halaman create
    public function create()
    {
        return view('admin.blog.create');
    }

    # fungsi store
    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul Wajib di isi!',
            'image.required' => 'Gambar wajib di tambahkan!',
            'desc.required' => 'Deskripsi wajib di isi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() .'.'. $request->image->extension();
        $request->file('image')->storeAs('public/artikel', $fileName);

        // artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();

        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);

        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Blog::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc'=> $dom->saveHTML(),
        ]);

        return redirect(route('blog'))->with('success', 'data berhasil di simpan!');
    }

    # halaman edit
    public function edit($id)
    {
        return view('admin.blog.edit');
    }

    # fungsi update
    public function update(Request $request, $id)
    {

    }

    # fungsi delete
    public function destroy($id)
    {

    }

}
