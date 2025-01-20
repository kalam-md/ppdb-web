@extends('layouts.layouts')

@section('content')
<section id="hero" class="px-0">
    <div class="container text-center text-white" data-aos="fade-up">
        <div class="hero-title" >
            <div class="hero-text">Selamat Datang <br> di Website SDN Balekambang 01</div>
        </div>
    </div>
</section>

<section id="program" style="margin-top: -30px">
    <div class="container col-xxl-9">
        <div class="row">
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pendidikan <br> Berkualitas</p>
                    </div>
                    <img src="{{ asset('assets/icons/ic-book.png') }}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pendidikan <br> Berakhlak</p>
                    </div>
                    <img src="{{ asset('assets/icons/ic-globe.png') }}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pendidikan <br> Teknologi</p>
                    </div>
                    <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pendidikan <br> Bertalenta</p>
                    </div>
                    <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="55" width="55" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Agenda --}}
<section id="agenda" style="margin-top: 100px" class="py-5">
    <div class="container">

        <div class="header-agenda text-center">
            <h2 class="fw-bold">Agenda Kegiatan SDN Balekambang 01</h2>
        </div>

        <div class="row py-5" data-aos="flip-up">
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/images/il-agenda-1.png') }}" class="img-fluid mb-3" alt="">
                    <div class="konten-agenda">
                        <p class="mb-3 text-secondary">10/01/2025</p>
                        <h4 class="fw-bold mb-3">Upacara rutin hari senin di SDN Balekambang 01</h4>
                        <p class="text-secondary">#sdnbalekambang01</p>
                        <a href="" class="text-decoration-none text-info">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/images/il-berita-02.png') }}" class="img-fluid mb-3" alt="">
                    <div class="konten-agenda">
                        <p class="mb-3 text-secondary">10/01/2025</p>
                        <h4 class="fw-bold mb-3">Pengajian Bulanan SDN Balekambang 01</h4>
                        <p class="text-secondary">#sdnbalekambang01</p>
                        <a href="" class="text-decoration-none text-info">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/images/il-berita-03.png') }}" class="img-fluid mb-3" alt="">
                    <div class="konten-agenda">
                        <p class="mb-3 text-secondary">10/01/2025</p>
                        <h4 class="fw-bold mb-3">Kantin bersih yang ada di SDN Balekambang 01</h4>
                        <p class="text-secondary">#sdnbalekambang01</p>
                        <a href="" class="text-decoration-none text-info">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-berita text-center">
            <a href="/agenda" class="btn btn-outline-danger">Agenda Lainnya</a>
        </div>
    </div>
</section>
{{-- Agenda --}}

{{-- Video --}}
<section id="video" class="py-5" data-aos="zoom-in">
    <div class="container py-5">
        <div class="header-agenda text-center">
            <h2 class="fw-bold">Video Kegiatan SDN Balekambang 01</h2>
        </div>

        <div class="row py-5">
            <div class="col-lg-4">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/xtcdVg4AYS4?si=vCG7bDx1zu8Fk1aY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/xtcdVg4AYS4?si=vCG7bDx1zu8Fk1aY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/xtcdVg4AYS4?si=vCG7bDx1zu8Fk1aY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>

        <div class="footer-agenda text-center">
            <a href="" class="btn btn-outline-danger">Video Lainnya</a>
        </div>
    </div>
</section>
{{-- Video --}}

{{-- Foto --}}
<section id="foto" class="section-foto parallax" data-aos="zoom-in-up">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
                <div class="stripe-putih me-2"></div>
                <h5 class="fw-bold text-black">Foto Kegiatan</h5>
            </div>
            <div>
                <a href="/foto" class="btn btn-outline-danger">Foto Lainnya</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <a class="image-link" href="{{ asset('assets/images/il-photo-02.png') }}">
                    <img src="{{ asset('assets/images/il-photo-02.png') }}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <a class="image-link" href="{{ asset('assets/images/il-photo-03.png') }}">
                    <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <a class="image-link" href="{{ asset('assets/images/il-photo-04.png') }}">
                    <img src="{{ asset('assets/images/il-photo-04.png') }}" class="img-fluid" alt="">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <a class="image-link" href="{{ asset('assets/images/il-photo-02.png') }}">
                    <img src="{{ asset('assets/images/il-photo-02.png') }}" class="img-fluid" alt="">
                </a>
            </div>
        </div>

    </div>
</section>
{{-- Foto --}}

{{-- Fasilitas --}}
<section id="fasilitas" class="py-5" data-aos="zoom-in-up">
    <div class="container py-5">
        <div class="text-center">
            <h3 class="fw-bold py-5">Fasilitas Sekolah</h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <img src="{{ asset('assets/images/fasilitas-1.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <img src="{{ asset('assets/images/il-photo-04.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <img src="{{ asset('assets/images/il-photo-02.png') }}" class="img-fluid" alt="">
            </div>
        </div>
        <div class="text-center py-5">
            <a href="" class="btn btn-outline-danger">Fasilitas Lainnya</a>
        </div>
    </div>
</section>
{{-- Fasilitas --}}

{{-- Join --}}
<section id="join" class="py-5" data-aos="flip-down">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5 class="fw-bold">Penerimaan Peserta Didik Baru</h5>
                </div>
                <h1 class="fw-bold mb-2">Gabung bersama kami, mewujudkan generasi berkualitas</h1>
                <p class="mb-3">Masa depan cerah dimulai dari pendidikan yang baik. Gabung dengan kami dan jadilah siswa yang cerdas.</p>
                <button class="btn btn-outline-danger">Daftar Disini</button>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/daftar.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
{{-- Join --}}
@endsection






