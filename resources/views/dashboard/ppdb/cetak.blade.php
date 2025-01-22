<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pendaftaran PPDB</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            line-height: 1.5;
        }
        h1, h5 {
            text-align: center;
            margin: 0;
        }
        .kop-surat {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }
        .kop-surat img {
            width: 80px;
            height: auto;
            margin-right: 20px;
        }
        .kop-surat .text {
            text-align: center;
            flex: 1;
        }
        .content {
            margin-top: 30px;
        }
        .section {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #000;
            border-radius: 5px;
        }
        .section p {
            margin-bottom: 10px;
            font-weight: bold;
            text-transform: uppercase;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        .alert {
            padding: 10px;
            margin-top: 20px;
            border: 1px solid #bee5eb;
            border-radius: 5px;
            background-color: #d1ecf1;
            color: #0c5460;
        }
        .font-weight-bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="kop-surat">
        {{-- <img src="logo.png" alt="Logo Sekolah"> --}}
        <div class="text">
            <h1>SDN Balekambang 01</h1>
            <h5>Jl. Contoh Alamat, Kecamatan Contoh, Kota Contoh</h5>
            <h5>Telp: (021) 8989XXXX</h5>
        </div>
    </div>

    <div class="content">
        <h1>Pendaftaran Peserta Didik Baru</h1>
        <h5>Detail Pendaftaran</h5>

        <div class="section">
            <p>A. Data Pribadi Siswa</p>
            <ul>
                <li><strong>Nama Lengkap:</strong> {{ $pendaftaran->nama_lengkap }}</li>
                <li><strong>NIK:</strong> {{ $pendaftaran->nik }}</li>
                <li><strong>Jenis Kelamin:</strong> {{ $pendaftaran->jenis_kelamin }}</li>
                <li><strong>No. Kartu Keluarga:</strong> {{ $pendaftaran->no_kartu_keluarga }}</li>
            </ul>
        </div>

        <div class="section">
            <p>B. Data Kelahiran</p>
            <ul>
                <li><strong>Tempat Lahir:</strong> {{ $pendaftaran->tempat_lahir ?? '-' }}</li>
                <li><strong>Tanggal Lahir:</strong> {{ $pendaftaran->tanggal_lahir ? \Carbon\Carbon::parse($pendaftaran->tanggal_lahir)->format('d M Y') : '-' }}</li>
                <li><strong>Kewarganegaraan:</strong> {{ $pendaftaran->kewarganegaraan ?? '-' }}</li>
                <li><strong>Agama:</strong> {{ $pendaftaran->agama ?? '-' }}</li>
                <li><strong>Alamat:</strong> {{ $pendaftaran->alamat ?? '-' }}, RT {{ $pendaftaran->rt ?? '-' }}/RW {{ $pendaftaran->rw ?? '-' }}, {{ $pendaftaran->kelurahan ?? '-' }}, {{ $pendaftaran->kecamatan ?? '-' }}, {{ $pendaftaran->kota ?? '-' }}</li>
            </ul>
        </div>

        <div class="section">
            <p>C. Data Orang Tua</p>
            <ul>
                <li><strong>Nama Ayah:</strong> {{ $pendaftaran->nama_ayah ?? '-' }}</li>
                <li><strong>NIK Ayah:</strong> {{ $pendaftaran->nik_ayah ?? '-' }}</li>
                <li><strong>Pekerjaan Ayah:</strong> {{ $pendaftaran->pekerjaan_ayah ?? '-' }}</li>
                <li><strong>Nama Ibu:</strong> {{ $pendaftaran->nama_ibu ?? '-' }}</li>
                <li><strong>NIK Ibu:</strong> {{ $pendaftaran->nik_ibu ?? '-' }}</li>
                <li><strong>Pekerjaan Ibu:</strong> {{ $pendaftaran->pekerjaan_ibu ?? '-' }}</li>
            </ul>
        </div>

        <div class="alert">
            <strong>Informasi:</strong> Untuk informasi lebih lanjut bisa menghubungi panitia PPDB:
            <br>
            Telp/WA: (021) 8989XXXX
        </div>
    </div>
</body>
</html>
