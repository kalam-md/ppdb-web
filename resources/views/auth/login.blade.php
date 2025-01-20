@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px">
    <div class="container py-5 col-xxl-6">
        <h3 class="mb-3 fw-bold">Halaman Login SDN Balekambang 01</h3>

        <form action="/login" method="POST">
            @csrf
            <div class="mb-3 form-group">
                <label for="login">NIK atau Username</label>
                <input type="text" name="login" class="form-control @error('login') is-invalid @enderror" value="{{ old('login') }}">
                @error('login')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
            <a href="/daftar" class="btn btn-link">Belum punya akun? Daftar</a>
        </form>
    </div>
</section>
@endsection