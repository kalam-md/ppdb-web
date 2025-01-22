@extends('dashboard.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">List PPDB</h1>
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
                  <!-- Form Pencarian -->
                  <form method="GET" action="{{ route('ppdb.index') }}" class="mb-4">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan nama atau NIK..." value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                  </form>

                  <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Nama Peserta
                            </th>
                            <th style="width: 40%">
                                Alamat
                            </th>
                            <th class="text-center">
                                Status
                            </th>
                            <th>
                              
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($ppdb_all as $ppdb)
                        <tr>
                          <td>
                              {{ $loop->iteration }}
                          </td>
                          <td>
                              <a>
                                {{ $ppdb->nama_lengkap }}
                              </a>
                              <br/>
                              <small>
                                  NIK : {{ $ppdb->nik }}
                              </small>
                          </td>
                          <td>
                            {{ $ppdb->alamat }}, Rt:{{ $ppdb->rt }}/Rw:{{ $ppdb->rw }}, Kec.{{ $ppdb->kecamatan }}, Kota.{{ $ppdb->kota }}
                          </td>
                          <td class="project-state">
                              @if ($ppdb->status == 'pending')
                              <span class="badge badge-warning">{{ $ppdb->status }}</span>
                              @elseif($ppdb->status == 'ditolak')
                              <span class="badge badge-danger">{{ $ppdb->status }}</span>
                              @else
                              <span class="badge badge-success">{{ $ppdb->status }}</span>
                              @endif
                          </td>
                          <td class="text-right project-actions">
                              <a class="btn btn-primary btn-sm" href="{{ route('pendaftaran-siswa.show', $ppdb->slug) }}">
                                  <i class="fas fa-folder">
                                  </i>
                                  Detail
                              </a>
                              @if ($ppdb->status === 'pending')
                                  <a class="btn btn-info btn-sm btn-verifikasi" href="#" data-id="{{ $ppdb->id }}">
                                      <i class="fas fa-pencil-alt"></i>
                                      Verifikasi
                                  </a>
                                  <a class="btn btn-danger btn-sm btn-tolak" href="#" data-id="{{ $ppdb->id }}">
                                      <i class="fas fa-trash"></i>
                                      Tolak
                                  </a>
                              @endif    
                              <a class="btn btn-success btn-sm" href="{{ route('pendaftaran-siswa.cetak', $ppdb->slug) }}">
                                <i class="fas fa-download">
                                </i>
                                Cetak
                              </a>                        
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  // Tangani tombol verifikasi
  document.querySelectorAll('.btn-verifikasi').forEach(button => {
      button.addEventListener('click', function () {
          const id = this.dataset.id;
          Swal.fire({
              title: 'Apakah Anda yakin?',
              text: "Status akan diubah menjadi diverifikasi.",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, ubah!'
          }).then((result) => {
              if (result.isConfirmed) {
                  updateStatus(id, 'diverifikasi');
              }
          });
      });
  });

  // Tangani tombol tolak
  document.querySelectorAll('.btn-tolak').forEach(button => {
      button.addEventListener('click', function () {
          const id = this.dataset.id;
          Swal.fire({
              title: 'Apakah Anda yakin?',
              text: "Status akan diubah menjadi ditolak.",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, ubah!'
          }).then((result) => {
              if (result.isConfirmed) {
                  updateStatus(id, 'ditolak');
              }
          });
      });
  });

  // Fungsi untuk mengupdate status
  function updateStatus(id, status) {
      fetch(`/pendaftaran-siswa/${id}/status`, {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
          },
          body: JSON.stringify({ status: status })
      })
      .then(response => response.json())
      .then(data => {
          Swal.fire(
              'Berhasil!',
              data.message,
              'success'
          ).then(() => {
              location.reload();
          });
      })
      .catch(error => {
          Swal.fire(
              'Error!',
              'Terjadi kesalahan, silakan coba lagi.',
              'error'
          );
      });
  }
</script>
@endsection