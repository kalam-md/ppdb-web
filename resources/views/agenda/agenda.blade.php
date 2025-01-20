@extends('layouts.layouts')

@section('content')
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
            <a href="" class="btn btn-outline-danger">Agenda Lainnya</a>
        </div>
    </div>
</section>
{{-- Agenda --}}
@endsection