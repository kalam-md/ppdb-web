@extends('layouts.layouts')

@section('content')
<section id="detail" style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8">
        <div class="mb-3">
            Agenda
        </div>
        <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid mb-3" alt="">
            <div class="konten-agenda">
                <p class="mb-3 text-secondary">{{ $blog->created_at }}</p>
                <h4 class="fw-bold mb-3">{{ $blog->judul }}</h4>
                <p class="text-secondary">
                    {!! $blog->desc !!}
                </p>
            </div>
    </div>
</section>
@endsection