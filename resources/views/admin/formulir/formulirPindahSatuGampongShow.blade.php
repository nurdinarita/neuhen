@extends('admin.layout.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="text-decoration-none">Dashboard</a></li>
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{ $title }}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <p>Nomor Kartu Keluarga</p>
                    <p>Nama Kepala Keluarga</p>
                    <p>Alamat</p>
                    <p>Gampong</p>
                    <p>Kecamatan</p>
                    <p>Kabupaten</p>
                    <p>Provinsi</p>
                    <p>Kode Pos</p>
                    <p>Kode Pos</p>
                    <p>Telepon</p>
                    <p>NIK Pemohon</p>
                    <p>Nama Lengkap</p>
                    <p>Alasan Pindah</p>
                    <p>Status KK Bagi Yang Tidak Pindah</p>
                    <p>Status KK Bagi Yang Pindah</p>
                    <h5>Data Keluarga Yang Pindah</h5>
                    @for($i=1; $i<=10; $i++)
                        <p>NIK<p>
                        <p>Nama<p>
                    @endfor
                </div>
                <div class="col-8">
                    <p>: {{ $data->nomor_kk }}</p>
                    <p>: {{ $data->nama_kepala_keluarga }}</p>
                    <p>: {{ $data->alamat }}</p>
                    <p>: {{ $data->dusun }}</p>
                    <p>: {{ $data->gampong }}</p>
                    <p>: {{ $data->kecamatan }}</p>
                    <p>: {{ $data->kabupaten }}</p>
                    <p>: {{ $data->provinsi }}</p>
                    <p>: {{ $data->kode_pos }}</p>
                    <p>: {{ $data->no_telepon }}</p>
                    <p>: {{ $data->nik_pemohon }}</p>
                    <p>: {{ $data->nama_lengkap }}</p>
                    <p>: {{ $data->alasan_pindah }}</p>
                    <p>: {{ $data->status_kk_yang_tidak_pindah }}</p>
                    <p>: {{ $data->status_kk_yang_pindah }}</p>
                    <h5><br></h5>
                    @for($i=1; $i<=10; $i++)
                    <p>: {{ $data['nik_anggota_'.$i]}}</p>
                    <p>: {{ $data['nama_anggota_'.$i]}}</p>
                @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection