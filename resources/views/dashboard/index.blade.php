@extends('dashboard.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Formulir Pendaftaran</h5>

              <p class="card-text">
                Silahkan isi formulir pendaftaran pada link di bawah ini untuk mengikuti PPDB di SDN Balekambang 1
              </p>
          
              <a href="#" class="card-link">Formulir Pendaftaran</a>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Status Pendaftaran</h5>

              <p class="card-text">
                Silahkan kunjungi menu status pendaftaran agar dapat melihat status pendaftaran PPDB siswa pada link yang tersedia dibawah
              </p>
          
              <a href="#" class="card-link">Status Pendaftaran</a>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cetak Formulir Pendaftaran</h5>

              <p class="card-text">
                Silahkan klik tombol cetak status pendaftaran dibawah agar dapat mencetak formulir pendaftaran PPDB
              </p>
          
              <a href="#" class="card-link">Cetak Status Pendaftaran</a>
            </div>
          </div>
        </div>
        
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
                  </div>
              </div>
          </div>
        </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content -->
@endsection