@extends('admin.layout.main')

@section('container')
<div class="container-fluid px-4 mb-5">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
    <div class="row mb-3">
      <div class="col-md-12">
        <h6 class="text-start">No Kartu Keluarga : {{ $kartu_keluarga->no_kk }}</h6>
        <h6 class="text-start">Nama Kepala Keluarga : {{ $kartu_keluarga->nama_kepala_keluarga }}</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-12">
        <img src="{{ url('storage/file-kk/'.$kartu_keluarga->file_kk) }}" width="100%">
      </div>
    </div>

</div>
@endsection