@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold mb-2">Halaman Management Artikel</h3>
            <p>Atur dan Kelola artikel Kegiatan Sekolah</p>

            <div class="d-flex">
                <a href="{{ route('dashboard') }}">Home</a>
                <div class="mx-1">/</div>
                <a href="{{ route('dashboard') }}">Blog Artikel</a>
            </div>
        </div>
    </section>
@endsection
