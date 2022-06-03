@extends('admin.layout.main')

@section('container')
{{-- {{ print_r($errors->all()) }} --}}
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="{{ url('/admin/kegiatan-gampong') }}" class="text-decoration-none">Kegiatan Gampong</a> / {{ $title }}</a></li>
    </ol>
    <div class="row mb-5">
        <div class="col-md-8">
            <form method="post" action="{{ isset($activity) ? url('/admin/kegiatan-gampong/'.$activity->id): url('/admin/kegiatan-gampong') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($activity))
                @method('put')
                @endif

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kegiatan</label>
                    <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" id="name" name="name" value="{{ isset($activity) ? $activity->name : old('name') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" class="form-control @if($errors->has('image')) is-invalid @endif" id="image" name="image">
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control @if($errors->has('description')) is-invalid @endif">{{ isset($activity) ? $activity->description : old('description') }}</textarea>
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection