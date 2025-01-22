@extends('dashboard.layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $blog->judul }}</h1>
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
                        <div class="blog-detail">
                            @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-fluid mb-3">
                            @endif
                            <p><strong>Slug:</strong> {{ $blog->slug }}</p>
                            <p><strong>Deskripsi:</strong></p>
                            <div>{!! $blog->desc !!}</div>
                            <p><strong>Terbit:</strong> {{ $blog->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
