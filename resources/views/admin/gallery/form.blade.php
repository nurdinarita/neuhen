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
            <form method="post" action="{{ url('/admin/gallery') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
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