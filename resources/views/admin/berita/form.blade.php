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
            <form method="post" action="{{ isset($news) ? url('/admin/berita-gampong/'.$news->id): url('/admin/berita-gampong') }}" enctype="multipart/form-data">
                @csrf
                @if(isset($news))
                @method('put')
                @endif

                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif" id="title" name="title" value="{{ isset($news) ? $news->title : old('title') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @if($errors->has('slug')) is-invalid @endif" id="slug" name="slug" value="{{ isset($news) ? $news->slug : old('slug') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
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
                    <input id="body" type="hidden" class="@if($errors->has('body')) is-invalid @endif" name="body" value="{{ isset($news) ? $news->body : old('body') }}">
                    <trix-editor input="body"></trix-editor>
                    <div class="invalid-feedback">
                        {{ $errors->first('body') }}
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection

@section('slug')
<script>
    $('#title').change(function(e) {
       $.get('{{ url('check_slug') }}', 
       { 'title': $(this).val() }, 
       function( data ) {
           $('#slug').val(data.slug);
       }
       );
    });
</script>
@endsection