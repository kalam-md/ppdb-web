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
                  <h5 class="card-title">Detail Pendaftaran - SDN Balekambang 01</h5>
      
                  <div class="card-text">
                      <p class="mb-3 font-weight-bold">Detail Pendaftaran Calon Peserta Didik</p>

                      <!-- Status -->
                      @if ($pendaftaran->status == 'pending')
                      <div class="mt-3 alert alert-warning">
                        <i class="mr-2 fas fa-info-circle"></i>
                        Status: Pendaftaran Anda telah menunggu verifikasi pihak sekolah. Silakan menunggu informasi lebih lanjut dari panitia PPDB.
                      </div>  
                      @elseif($pendaftaran->status == 'ditolak')
                      <div class="mt-3 alert alert-danger">
                        <i class="mr-2 fas fa-info-circle"></i>
                        Status: Pendaftaran Anda telah ditolak. Silakan menunggu informasi lebih lanjut dari panitia PPDB.
                      </div>  
                      @else
                      <div class="mt-3 alert alert-success">
                        <i class="mr-2 fas fa-check-circle"></i>
                        Status: Pendaftaran Anda telah diterima. Silakan menunggu informasi lebih lanjut dari panitia PPDB.
                      </div>  
                      @endif
      
                      <!-- Detail Data Pribadi -->
                      <p class="font-weight-bold">A. DATA PRIBADI SISWA</p>
                      <ul>
                          <li><strong>Nama Lengkap:</strong> {{ $pendaftaran->nama_lengkap }}</li>
                          <li><strong>NIK:</strong> {{ $pendaftaran->nik }}</li>
                          <li><strong>Jenis Kelamin:</strong> {{ $pendaftaran->jenis_kelamin }}</li>
                          <li><strong>No. Kartu Keluarga:</strong> {{ $pendaftaran->no_kartu_keluarga }}</li>
                          <li><strong>Photo Kartu Keluarga:</strong> <a href="{{ asset('photo/'.$pendaftaran->foto_kartu_keluarga) }}" target="_blank">Lihat photo KK</a></li>
                      </ul>
      
                      <!-- Detail Data Kelahiran -->
                      <p class="mt-3 font-weight-bold">B. DATA KELAHIRAN</p>
                      <ul>
                          <li><strong>Tempat Lahir:</strong> {{ $pendaftaran->tempat_lahir ?? '-' }}</li>
                          <li><strong>Tanggal Lahir:</strong> {{ $pendaftaran->tanggal_lahir ? \Carbon\Carbon::parse($pendaftaran->tanggal_lahir)->format('d M Y') : '-' }}</li>
                          <li><strong>Kewarganegaraan:</strong> {{ $pendaftaran->kewarganegaraan ?? '-' }}</li>
                          <li><strong>Agama:</strong> {{ $pendaftaran->agama ?? '-' }}</li>
                          <li><strong>Alamat:</strong> {{ $pendaftaran->alamat ?? '-' }}, RT {{ $pendaftaran->rt ?? '-' }}/RW {{ $pendaftaran->rw ?? '-' }}, {{ $pendaftaran->kelurahan ?? '-' }}, {{ $pendaftaran->kecamatan ?? '-' }}, {{ $pendaftaran->kota ?? '-' }}</li>
                      </ul>
      
                      <!-- Detail Data Orang Tua -->
                      <p class="mt-3 font-weight-bold">C. DATA ORANG TUA</p>
                      <ul>
                          <li><strong>Nama Ayah:</strong> {{ $pendaftaran->nama_ayah ?? '-' }}</li>
                          <li><strong>NIK Ayah:</strong> {{ $pendaftaran->nik_ayah ?? '-' }}</li>
                          <li><strong>Pekerjaan Ayah:</strong> {{ $pendaftaran->pekerjaan_ayah ?? '-' }}</li>
                          <li><strong>Nama Ibu:</strong> {{ $pendaftaran->nama_ibu ?? '-' }}</li>
                          <li><strong>NIK Ibu:</strong> {{ $pendaftaran->nik_ibu ?? '-' }}</li>
                          <li><strong>Pekerjaan Ibu:</strong> {{ $pendaftaran->pekerjaan_ibu ?? '-' }}</li>
                      </ul>
      
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
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content -->
@endsection