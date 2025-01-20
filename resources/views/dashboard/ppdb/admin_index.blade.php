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
                              <a class="btn btn-primary btn-sm" href="#">
                                  <i class="fas fa-folder">
                                  </i>
                                  Detail
                              </a>
                              <a class="btn btn-info btn-sm" href="#">
                                  <i class="fas fa-pencil-alt">
                                  </i>
                                  Verifikasi
                              </a>
                              <a class="btn btn-danger btn-sm" href="#">
                                  <i class="fas fa-trash">
                                  </i>
                                  Tolak
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
@endsection