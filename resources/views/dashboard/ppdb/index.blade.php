@extends('dashboard.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Pendaftaran Peserta Didik Baru</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Persyaratan PPDB SDN Balekambang 01</h5>
      
                  <div class="card-text">
                      <p class="mb-3 font-weight-bold">Untuk melakukan pendaftaran siswa baru, calon peserta didik wajib memenuhi syarat-syarat berikut:</p>
                      
                      <p class="font-weight-bold">A. PERSYARATAN UMUM</p>
                      <ol>
                          <li>Telah berusia 7 tahun pada 1 Juli tahun berjalan</li>
                          <li>Apabila kuota masih tersedia, dapat menerima anak usia 6 tahun pada 1 Juli tahun berjalan</li>
                      </ol>
      
                      <p class="mt-3 font-weight-bold">B. PERSYARATAN DOKUMEN YANG HARUS DIBAWA DAN ISI</p>
                      <ol>
                          <li>Fotocopy Akta Kelahiran (2 lembar)</li>
                          <li>Fotocopy Kartu Keluarga (2 lembar)</li>
                          <li>Pas Foto ukuran 3x4 latar merah (4 lembar)</li>
                          <li>Mengisi form pendaftaran pada aplikasi</li>
                      </ol>
      
                      <div class="mt-3 alert alert-info">
                          <i class="mr-2 fas fa-info-circle"></i>
                          Untuk informasi lebih lanjut bisa menghubungi panitia PPDB:
                          <br>
                          Telp/WA: (021) 8989XXXX
                      </div>

                      @php
                        // Cek apakah user sudah mendaftar
                        $pendaftaran = \App\Models\PendaftaranSiswa::where('user_id', Auth::user()->id)->first();
                      @endphp

                      @if($pendaftaran)
                          <a href="{{ route('pendaftaran-siswa.show', $pendaftaran->slug) }}" class="btn btn-block btn-info">
                              Lihat Status Pendaftaran
                          </a>
                      @else
                          <a href="{{ route('pendaftaran-siswa.create') }}" class="btn btn-block btn-primary">
                              <i class="mr-2 fas fa-edit"></i>Daftar Sekarang
                          </a>
                      @endif
                  </div>
              </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content -->
@endsection