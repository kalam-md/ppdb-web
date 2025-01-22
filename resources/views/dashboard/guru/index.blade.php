@extends('dashboard.layouts.main')

@section('content')
<!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="mb-2 row">
        <div class="col-sm-6">
          <h1 class="m-0">List Guru</h1>
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
                                Nama Guru
                            </th>
                            <th style="width: 40%">
                                Username
                            </th>
                            <th class="text-center">
                                Role
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($gurus as $guru)
                        <tr>
                          <td>
                              {{ $loop->iteration }}
                          </td>
                          <td>
                              <a>
                                {{ $guru->nama_lengkap }}
                              </a>
                          </td>
                          <td>
                            {{ $guru->username }}
                          </td>
                          <td class="project-state">
                              <span class="badge badge-success">{{ $guru->role }}</span>
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