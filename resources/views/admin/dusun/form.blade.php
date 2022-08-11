@extends('admin.layout.main')

@section('container')
{{-- {{ print_r($errors->all()) }} --}}
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="{{ url('/admin/gallery') }}" class="text-decoration-none">Gallery</a> / {{ $title }}</a></li>
    </ol>
    <div class="row mb-5">
        <div class="col-md-8">
            <form method="post" action="{{ !isset($dusun) ? url('/admin/dusun') : url('/admin/dusun/'.$dusun->id) }}">
                @csrf
                @if(isset($dusun))
                    @method('put')
                @endif
                <div class="mb-3">
                    <label for="nama_dusun" class="form-label">Nama Dusun</label>
                    <input type="text" name="nama_dusun" id="nama_dusun" class="form-control @if($errors->has('nama_dusun')) is-invalid @endif" value="{{ isset($dusun) ? $dusun->nama_dusun : old('nama_dusun') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_dusun') }}
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection