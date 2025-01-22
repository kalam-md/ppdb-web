@extends('layouts.layouts')

@section('content')
{{-- Agenda --}}
<section id="agenda" style="margin-top: 100px" class="py-5">
    <div class="container">

        <div class="header-agenda text-center">
            <h2 class="fw-bold">Agenda Kegiatan SDN Balekambang 01</h2>
        </div>

        <div class="row py-5" data-aos="flip-up">
            @foreach ($blogs as $blog)
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('storage/' . $blog->image) }}" class="img-fluid mb-3" alt="">
                        <div class="konten-agenda">
                            <p class="mb-3 text-secondary">{{ $blog->created_at }}</p>
                            <h4 class="fw-bold mb-3">{{ $blog->judul }}</h4>
                            <p class="text-secondary">#{{ $blog->slug }}</p>
                            <a href="{{ route('agenda.detail', $blog->slug) }}" class="text-decoration-none text-info">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
{{-- Agenda --}}
@endsection