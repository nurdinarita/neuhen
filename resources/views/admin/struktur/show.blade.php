@extends('admin.layout.main')

@section('container')
<div class="container-fluid px-4 mb-5">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
    <div class="row mb-3">
      <div class="col-md-12">
        <h4 class="text-center">Struktur Tahun {{ $organization->year }}</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <img src="{{ url('storage/organizations-image/'.$organization->image) }}" height="500px" width="100%">
      </div>
    </div>

</div>
@endsection