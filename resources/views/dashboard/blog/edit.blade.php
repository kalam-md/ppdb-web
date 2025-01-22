@extends('dashboard.layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Blog</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('blog.update', $blog->slug) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $blog->judul) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="desc">Deskripsi</label>
                                <input id="desc" type="hidden" name="desc" value="{{ old('desc', $blog->desc) }}">
                                <trix-editor input="desc"></trix-editor>
                            </div>

                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                @if ($blog->image)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-thumbnail" width="350">
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update Blog</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection