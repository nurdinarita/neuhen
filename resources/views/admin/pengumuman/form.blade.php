@extends('admin.layout.main')

@section('container')
{{-- {{ print_r($errors->all()) }} --}}
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"><a href="{{ url('/admin/pengumuman') }}" class="text-decoration-none">Pengumuman Gampong</a> / {{ $title }}</a></li>
    </ol>
    <div class="row mb-5">
        <div class="col-md-8">
            <form method="post" action="{{ isset($announcement) ? url('/admin/pengumuman/'.$announcement->id): url('/admin/pengumuman') }}">
                @csrf
                @if(isset($announcement))
                @method('put')
                @endif
                <div class="mb-3">
                    <label for="announcement" class="form-label">Pengumuman</label>
                    <textarea name="announcement" id="announcement" class="form-control @if($errors->has('announcement')) is-invalid @endif">{{ isset($announcement) ? $announcement->announcement : old('announcement') }}</textarea>
                    <div class="invalid-feedback">
                        {{ $errors->first('announcement') }}
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection