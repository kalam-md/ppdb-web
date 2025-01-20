@extends('layouts.layouts')

@section('content')
<section id="detail" style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8">
        <div class="mb-3">
            Agenda
        </div>
        <img src="{{ asset('assets/images/il-agenda-1.png') }}" class="img-fluid mb-3" alt="">
            <div class="konten-agenda">
                <p class="mb-3 text-secondary">10/01/2025</p>
                <h4 class="fw-bold mb-3">Upacara rutin hari senin di SDN Balekambang 01</h4>
                <p class="text-secondary">#sdnbalekambang01</p>
            </div>
    </div>
</section>
@endsection