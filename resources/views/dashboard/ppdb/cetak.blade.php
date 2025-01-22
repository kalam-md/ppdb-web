<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran PPDB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.5;
        }
        h1, h5 {
            text-align: center;
        }
        .content {
            margin: 20px 0;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .alert-warning {
            background-color: #fff3cd;
            color: #856404;
            border: 1px solid #ffeeba;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-info {
            background-color: #d1ecf1;
            color: #0c5460;
            border: 1px solid #bee5eb;
        }
        .mt-3 {
            margin-top: 20px;
        }
        .font-weight-bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Pendaftaran Peserta Didik Baru</h1>
    <h5>Detail Pendaftaran - SDN Balekambang 01</h5>

    <div class="content">
        <p class="font-weight-bold">A. DATA PRIBADI SISWA</p>
        <ul>
            <li><strong>Nama Lengkap:</strong> {{ $pendaftaran->nama_lengkap }}</li>
            <li><strong>NIK:</strong> {{ $pendaftaran->nik }}</li>
            <li><strong>Jenis Kelamin:</strong> {{ $pendaftaran->jenis_kelamin }}</li>
            <li><strong>No. Kartu Keluarga:</strong> {{ $pendaftaran->no_kartu_keluarga }}</li>
            <li><strong>Photo Kartu Keluarga:</strong> <a href="{{ asset('photo/'.$pendaftaran->foto_kartu_keluarga) }}" target="_blank">Lihat photo KK</a></li>
        </ul>

        <p class="font-weight-bold">B. DATA KELAHIRAN</p>
        <ul>
            <li><strong>Tempat Lahir:</strong> {{ $pendaftaran->tempat_lahir ?? '-' }}</li>
            <li><strong>Tanggal Lahir:</strong> {{ $pendaftaran->tanggal_lahir ? \Carbon\Carbon::parse($pendaftaran->tanggal_lahir)->format('d M Y') : '-' }}</li>
            <li><strong>Kewarganegaraan:</strong> {{ $pendaftaran->kewarganegaraan ?? '-' }}</li>
            <li><strong>Agama:</strong> {{ $pendaftaran->agama ?? '-' }}</li>
            <li><strong>Alamat:</strong> {{ $pendaftaran->alamat ?? '-' }}, RT {{ $pendaftaran->rt ?? '-' }}/RW {{ $pendaftaran->rw ?? '-' }}, {{ $pendaftaran->kelurahan ?? '-' }}, {{ $pendaftaran->kecamatan ?? '-' }}, {{ $pendaftaran->kota ?? '-' }}</li>
        </ul>

        <p class="font-weight-bold">C. DATA ORANG TUA</p>
        <ul>
            <li><strong>Nama Ayah:</strong> {{ $pendaftaran->nama_ayah ?? '-' }}</li>
            <li><strong>NIK Ayah:</strong> {{ $pendaftaran->nik_ayah ?? '-' }}</li>
            <li><strong>Pekerjaan Ayah:</strong> {{ $pendaftaran->pekerjaan_ayah ?? '-' }}</li>
            <li><strong>Nama Ibu:</strong> {{ $pendaftaran->nama_ibu ?? '-' }}</li>
            <li><strong>NIK Ibu:</strong> {{ $pendaftaran->nik_ibu ?? '-' }}</li>
            <li><strong>Pekerjaan Ibu:</strong> {{ $pendaftaran->pekerjaan_ibu ?? '-' }}</li>
        </ul>

        <div class="alert alert-info mt-3">
            Untuk informasi lebih lanjut bisa menghubungi panitia PPDB:
            <br>
            Telp/WA: (021) 8989XXXX
        </div>
    </div>
</body>
</html>
