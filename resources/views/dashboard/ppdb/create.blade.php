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
            <form action="{{ route('pendaftaran-siswa.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <!-- Tahap 1 -->
              <div class="card-body" id="tahap1">
                  <h4 class="mb-4">Tahap 1 - Data Pribadi Siswa</h4>
                  
                  <div class="form-group">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control @error('nama_lengkap') is-invalid @enderror" 
                             name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                      @error('nama_lengkap')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
  
                  <div class="form-group">
                      <label>NIK</label>
                      <input type="text" class="form-control @error('nik') is-invalid @enderror" 
                             name="nik" value="{{ old('nik') }}">
                      @error('nik')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
  
                  <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                          <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                      </select>
                      @error('jenis_kelamin')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
  
                  <div class="form-group">
                      <label>Nomor Kartu Keluarga</label>
                      <input type="text" class="form-control @error('no_kartu_keluarga') is-invalid @enderror" 
                             name="no_kartu_keluarga" value="{{ old('no_kartu_keluarga') }}">
                      @error('no_kartu_keluarga')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
  
                  <div class="form-group">
                    <label>Upload Kartu Keluarga</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('foto_kartu_keluarga') is-invalid @enderror" 
                                   name="foto_kartu_keluarga" id="foto_kartu_keluarga" accept="image/*">
                            <label class="custom-file-label" for="foto_kartu_keluarga">Pilih file</label>
                        </div>
                    </div>
                    @error('foto_kartu_keluarga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="mt-3">
                        <img id="preview_kartu_keluarga" src="#" alt="Preview Gambar" style="display: none; max-width: 500px; height: auto; object-fit:cover">
                    </div>
                </div>
  
                  <div class="text-right">
                      <button type="button" class="btn btn-primary" onclick="nextStep(1)">Lanjut</button>
                  </div>
              </div>
  
              <!-- Tahap 2 -->
              <div class="card-body" id="tahap2" style="display: none;">
                  <h4 class="mb-4">Tahap 2 - Data Kelahiran</h4>
  
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Tempat Lahir</label>
                              <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" 
                                     name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                              @error('tempat_lahir')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" 
                                     name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                              @error('tanggal_lahir')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                  </div>
  
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Kewarganegaraan</label>
                              <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror" 
                                     name="kewarganegaraan" value="{{ old('kewarganegaraan') }}">
                              @error('kewarganegaraan')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Agama</label>
                              <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                  <option value="">Pilih Agama</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Katolik">Katolik</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Buddha">Buddha</option>
                                  <option value="Konghucu">Konghucu</option>
                              </select>
                              @error('agama')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                  </div>
  
                  <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control @error('alamat') is-invalid @enderror" 
                                name="alamat" rows="3">{{ old('alamat') }}</textarea>
                      @error('alamat')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
  
                  <div class="row">
                      <div class="col-md-3">
                          <div class="form-group">
                              <label>RT</label>
                              <input type="text" class="form-control @error('rt') is-invalid @enderror" 
                                     name="rt" value="{{ old('rt') }}">
                              @error('rt')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label>RW</label>
                              <input type="text" class="form-control @error('rw') is-invalid @enderror" 
                                     name="rw" value="{{ old('rw') }}">
                              @error('rw')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Kelurahan</label>
                              <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" 
                                     name="kelurahan" value="{{ old('kelurahan') }}">
                              @error('kelurahan')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                  </div>
  
                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Kecamatan</label>
                              <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" 
                                     name="kecamatan" value="{{ old('kecamatan') }}">
                              @error('kecamatan')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label>Kota</label>
                              <input type="text" class="form-control @error('kota') is-invalid @enderror" 
                                     name="kota" value="{{ old('kota') }}">
                              @error('kota')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                  </div>
  
                  <div class="text-right">
                      <button type="button" class="mr-2 btn btn-secondary" onclick="prevStep(2)">Kembali</button>
                      <button type="button" class="btn btn-primary" onclick="nextStep(2)">Lanjut</button>
                  </div>
              </div>
  
              <!-- Tahap 3 -->
              <div class="card-body" id="tahap3" style="display: none;">
                  <h4 class="mb-4">Tahap 3 - Data Orang Tua</h4>
  
                  <h5>Data Ayah</h5>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Nama Ayah</label>
                              <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" 
                                     name="nama_ayah" value="{{ old('nama_ayah') }}">
                              @error('nama_ayah')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label>NIK Ayah</label>
                              <input type="text" class="form-control @error('nik_ayah') is-invalid @enderror" 
                                     name="nik_ayah" value="{{ old('nik_ayah') }}">
                              @error('nik_ayah')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Pekerjaan Ayah</label>
                              <input type="text" class="form-control @error('pekerjaan_ayah') is-invalid @enderror" 
                                     name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}">
                              @error('pekerjaan_ayah')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                  </div>
  
                  <h5 class="mt-4">Data Ibu</h5>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Nama Ibu</label>
                              <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" 
                                     name="nama_ibu" value="{{ old('nama_ibu') }}">
                              @error('nama_ibu')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label>NIK Ibu</label>
                              <input type="text" class="form-control @error('nik_ibu') is-invalid @enderror" 
                                     name="nik_ibu" value="{{ old('nik_ibu') }}">
                              @error('nik_ibu')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Pekerjaan Ibu</label>
                              <input type="text" class="form-control @error('pekerjaan_ibu') is-invalid @enderror" 
                                     name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}">
                              @error('pekerjaan_ibu')
                                  <div class="invalid-feedback">{{ $message }}</div>
                              @enderror
                          </div>
                      </div>
                  </div>
  
                  <div class="text-right">
                      <button type="button" class="mr-2 btn btn-secondary" onclick="prevStep(3)">Kembali</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<!-- /.content -->

<script>
    document.getElementById('foto_kartu_keluarga').addEventListener('change', function(event) {
        const input = event.target;
        const preview = document.getElementById('preview_kartu_keluarga');
        
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    });
</script>

<script>
function nextStep(currentStep) {
    // Validasi form sebelum pindah ke tahap selanjutnya
    if (validateStep(currentStep)) {
        $(`#tahap${currentStep}`).hide();
        $(`#tahap${currentStep + 1}`).show();
    }
}

function prevStep(currentStep) {
    $(`#tahap${currentStep}`).hide();
    $(`#tahap${currentStep - 1}`).show();
}

function validateStep(step) {
    let valid = true;
    
    if (step === 1) {
        if (!$('input[name="nama_lengkap"]').val()) {
            alert('Nama Lengkap harus diisi');
            valid = false;
        }
        if (!$('input[name="nik"]').val()) {
            alert('NIK harus diisi');
            valid = false;
        }
        // Tambahkan validasi lainnya untuk tahap 1
    }
    else if (step === 2) {
        if (!$('input[name="tempat_lahir"]').val()) {
            alert('Tempat Lahir harus diisi');
            valid = false;
        }
        if (!$('input[name="tanggal_lahir"]').val()) {
            alert('Tanggal Lahir harus diisi');
            valid = false;
        }
        // Tambahkan validasi lainnya untuk tahap 2
    }
    
    return valid;
}

$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

// Untuk menangani validasi form sebelum submit
$('form').on('submit', function(e) {
    let valid = true;
    
    // Validasi tahap 3 sebelum submit
    if (!$('input[name="nama_ayah"]').val()) {
        alert('Nama Ayah harus diisi');
        valid = false;
    }
    if (!$('input[name="nik_ayah"]').val()) {
        alert('NIK Ayah harus diisi');
        valid = false;
    }
    if (!$('input[name="nama_ibu"]').val()) {
        alert('Nama Ibu harus diisi');
        valid = false;
    }
    if (!$('input[name="nik_ibu"]').val()) {
        alert('NIK Ibu harus diisi');
        valid = false;
    }
    
    if (!valid) {
        e.preventDefault();
    }
});
</script>
@endsection