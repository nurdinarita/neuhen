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

                    <h5>Bayi/Anak</h5>
                    <p>Nama Bayi</p>
                    <p>Jenis Kelamin</p>
                    <p>Tempat Dilahirkan</p>
                    <p>Tempat Kelahiran</p>
                    <p>Tanggal Kelahiran</p>
                    <p>Jenis Kelahiran</p>
                    <p>Kelahiran Ke</p>
                    <p>Penolong Kelahiran</p>
                    <p>Berat Bayi</p>
                    <p>Panjang Bayi</p>

                    <h5>Ibu</h5>
                    <p>NIK</p>
                    <p>Nama Lengkap</p>
                    <p>Tanggal Lahir</p>
                    <p>Alamat</p>
                    <p>Desa</p>
                    <p>Kecamatan</p>
                    <p>Kabupaten</p>
                    <p>Provinsi</p>
                    <p>Kewarganegaraan</p>
                    <p>Kebangsaan</p>
                    <p>Tanggal Perkawinan</p>

                    <h5>Ayah</h5>
                    <p>NIK</p>
                    <p>Nama Lengkap</p>
                    <p>Tanggal Lahir</p>
                    <p>Alamat</p>
                    <p>Desa</p>
                    <p>Kecamatan</p>
                    <p>Kabupaten</p>
                    <p>Provinsi</p>
                    <p>Kewarganegaraan</p>
                    <p>Kebangsaan</p>

                    <h5>Pelapor</h5>
                    <p>NIK</p>
                    <p>Nama Lengkap</p>
                    <p>Umur</p>
                    <p>Alamat</p>
                    <p>Desa</p>
                    <p>Kecamatan</p>
                    <p>Kabupaten</p>
                    <p>Provinsi</p>

                    <h5>Saksi 1</h5>
                    <p>NIK</p>
                    <p>Nama Lengkap</p>
                    <p>Umur</p>
                    <p>Alamat</p>
                    <p>Desa</p>
                    <p>Kecamatan</p>
                    <p>Kabupaten</p>
                    <p>Provinsi</p>

                    <h5>Saksi 2</h5>
                    <p>NIK</p>
                    <p>Nama Lengkap</p>
                    <p>Umur</p>
                    <p>Alamat</p>
                    <p>Desa</p>
                    <p>Kecamatan</p>
                    <p>Kabupaten</p>
                    <p>Provinsi</p>
                </div>
                <div class="col-8">
                    <p>: {{ $data->nomor_kk }}</p>
                    <p>: {{ $data->nama_kepala_keluarga }}</p>
                    <h5><br></h5>
                    <p>: {{ $data->nama_bayi }}</p>
                    <p>: {{ $data->jenis_kelamin_bayi }}</p>
                    <p>: {{ $data->tempat_dilahirkan }}</p>
                    <p>: {{ $data->tempat_kelahiran }}</p>
                    <p>: {{ $data->tanggal_kelahiran }}</p>
                    <p>: {{ $data->jenis_kelahiran }}</p>
                    <p>: {{ $data->kelahiran_ke }}</p>
                    <p>: {{ $data->penolong_kelahiran }}</p>
                    <p>: {{ $data->berat_bayi }} Kg</p>
                    <p>: {{ $data->panjang_bayi }} cm</p>
                    <h5><br></h5>
                    <p>: {{ $data->nik_ibu }}</p>
                    <p>: {{ $data->nama_lengkap_ibu }}</p>
                    <p>: {{ $data->tanggal_lahir_ibu }}</p>
                    <p>: {{ $data->alamat_ibu }}</p>
                    <p>: {{ $data->desa_ibu }}</p>
                    <p>: {{ $data->kecamatan_ibu }}</p>
                    <p>: {{ $data->kab_ibu }}</p>
                    <p>: {{ $data->prov_ibu }}</p>
                    <p>: {{ $data->kewarganegaraan_ibu }}</p>
                    <p>: {{ $data->kebangsaan_ibu }}</p>
                    <p>: {{ $data->tanggal_perkawinan }}</p>
                    <h5><br></h5>
                    <p>: {{ $data->nik_ayah }}</p>
                    <p>: {{ $data->nama_lengkap_ayah }}</p>
                    <p>: {{ $data->tanggal_lahir_ayah }}</p>
                    <p>: {{ $data->alamat_ayah }}</p>
                    <p>: {{ $data->desa_ayah }}</p>
                    <p>: {{ $data->kecamatan_ayah }}</p>
                    <p>: {{ $data->kab_ayah }}</p>
                    <p>: {{ $data->prov_ayah }}</p>
                    <p>: {{ $data->kewarganegaraan_ayah }}</p>
                    <p>: {{ $data->kebangsaan_ayah }}</p>

                    <h5><br></h5>
                    <p>: {{ $data->nik_pelapor }}</p>
                    <p>: {{ $data->nama_lengkap_pelapor }}</p>
                    <p>: {{ $data->umur_pelapor }} Tahun</p>
                    <p>: {{ $data->alamat_pelapor }}</p>
                    <p>: {{ $data->desa_pelapor }}</p>
                    <p>: {{ $data->kecamatan_pelapor }}</p>
                    <p>: {{ $data->kab_pelapor }}</p>
                    <p>: {{ $data->prov_pelapor }}</p>
                    
                    <h5><br></h5>
                    <p>: {{ $data->nik_saksi_1 }}</p>
                    <p>: {{ $data->nama_lengkap_saksi_1 }}</p>
                    <p>: {{ $data->umur_saksi_1 }} Tahun</p>
                    <p>: {{ $data->alamat_saksi_1 }}</p>
                    <p>: {{ $data->desa_saksi_1 }}</p>
                    <p>: {{ $data->kecamatan_saksi_1 }}</p>
                    <p>: {{ $data->kab_saksi_1 }}</p>
                    <p>: {{ $data->prov_saksi_1 }}</p>

                    <h5><br></h5>
                    <p>: {{ $data->nik_saksi_2 }}</p>
                    <p>: {{ $data->nama_lengkap_saksi_2 }}</p>
                    <p>: {{ $data->umur_saksi_2 }} Tahun</p>
                    <p>: {{ $data->alamat_saksi_2 }}</p>
                    <p>: {{ $data->desa_saksi_2 }}</p>
                    <p>: {{ $data->kecamatan_saksi_2 }}</p>
                    <p>: {{ $data->kab_saksi_2 }}</p>
                    <p>: {{ $data->prov_saksi_2 }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection