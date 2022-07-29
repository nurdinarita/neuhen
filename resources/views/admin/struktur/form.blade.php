@extends('admin.layout.main')

@section('container')
{{-- {{ print_r($errors->all()) }} --}}
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="{{ url('/admin/organizations') }}" class="text-decoration-none">Struktur Organisasi</a> / {{ $title }}</a></li>
    </ol>
    <div class="row mb-5">
        <div class="col-md-8">
            <form method="post" action="{{ !isset($organization) ? url('/admin/organizations') : url('/admin/organizations/'.$organization->id) }}" enctype="multipart/form-data">
                @csrf
                @if(isset($organization))
                    @method('put')
                @endif
                <div class="mb-3">
                    <label for="year" class="form-label">Tahun</label>
                    <input type="text" class="form-control @if($errors->has('year')) is-invalid @endif" id="year" name="year" value="{{ isset($organization) ? $organization->year : old('year') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('year') }}
                    </div>

                    <label for="image" class="form-label">Gambar</label>
                    @if(isset($organization))
                        <br>
                        <img src="{{ asset('storage/organizations-image/'.$organization->image) }}" width="500px" class="mb-2 img-thumbnail">
                    @endif
                    <input type="file" name="image" id="image" class="form-control @if($errors->has('image')) is-invalid @endif">
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection