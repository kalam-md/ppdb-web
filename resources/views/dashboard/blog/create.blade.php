@extends('dashboard.layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Buat Blog</h1>
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
                        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan judul blog" required>
                            </div>

                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                                <div class="mt-3">
                                    <img id="preview" src="#" alt="Pratinjau Gambar" style="max-width: 100%; max-height: 300px; display: none;">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="desc">Deskripsi</label>
                                <input id="desc" type="hidden" name="desc">
                                <trix-editor input="desc"></trix-editor>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('image').addEventListener('change', function (event) {
        const preview = document.getElementById('preview');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    });
</script>
@endsection
