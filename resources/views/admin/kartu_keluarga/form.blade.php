@extends('admin.layout.main')

@section('container')
{{-- {{ print_r($errors->all()) }} --}}
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="{{ url('admin/berita-gampong') }}" class="text-decoration-none">Berita Gampong </a></li>
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
    <div class="row mb-5">
        <div class="col-md-8">
            <form method="post" action="{{ isset($kartu_keluarga) ? url('/admin/kartu-keluarga/'.$kartu_keluarga->id): url('/admin/kartu-keluarga/') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($kartu_keluarga))
                @method('put')
                @endif

                <div class="mb-3">
                    <label for="title" class="form-label">No Kartu Keluarga</label>
                    <input type="tel" class="form-control @if($errors->has('no_kk')) is-invalid @endif" id="no_kk" name="no_kk" value="{{ isset($kartu_keluarga) ? $kartu_keluarga->no_kk : old('no_kk') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('no_kk') }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Nama Kepala Keluarga</label>
                    <input type="text" class="form-control @if($errors->has('nama_kepala_keluarga')) is-invalid @endif" id="nama_kepala_keluarga" name="nama_kepala_keluarga" value="{{ isset($kartu_keluarga) ? $kartu_keluarga->nama_kepala_keluarga : old('nama_kepala_keluarga') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_kepala_keluarga') }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Jumlah Anggota Keluarga</label>
                    <input type="number" class="form-control @if($errors->has('jumlah_anggota_keluarga')) is-invalid @endif" id="jumlah_anggota_keluarga" name="jumlah_anggota_keluarga" value="{{ isset($kartu_keluarga) ? $kartu_keluarga->jumlah_anggota_keluarga : old('jumlah_anggota_keluarga') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('jumlah_anggota_keluarga') }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">File Kartu Keluarga</label>
                    <input type="file" class="form-control @if($errors->has('file_kk')) is-invalid @endif" id="file_kk" name="file_kk">
                    <div class="invalid-feedback">
                        {{ $errors->first('file_kk') }}
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection