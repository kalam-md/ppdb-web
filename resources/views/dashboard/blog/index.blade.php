@extends('dashboard.layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
                <h1 class="m-0">Blog</h1>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('blog.create') }}">
                            <i class="fas fa-plus">
                            </i>
                            Tambah blog
                        </a>
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 20%">
                                        Judul
                                    </th>
                                    <th>Terbit</th>
                                    <th>
                                      
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($blogs as $blog)
                              <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $blog->judul }}
                                </td>
                                <td>
                                    {{ $blog->created_at }}
                                </td>
                                <td class="text-right project-actions">
                                    <a class="btn btn-primary btn-sm" href="{{ route('blog.show', $blog->slug) }}">
                                        <i class="fas fa-folder">
                                        </i>
                                        Detail
                                    </a>
                                    <a class="btn btn-success btn-sm" href="{{ route('blog.edit', $blog->slug) }}">
                                        <i class="fas fa-pen">
                                        </i>
                                        Edit
                                    </a>
                                    <form action="{{ route('blog.destroy', $blog->slug) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash">
                                            </i>
                                            Hapus
                                        </button>
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
    </div>
</div>
@endsection
