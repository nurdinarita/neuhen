@extends('admin.layout.main')

@section('container')
<div class="container-fluid px-4 mb-5">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
    <div class="row mb-3">
      <div class="col-md-12">
        <h4 class="text-center">{{ $news->title }}</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <img src="{{ url('storage/news-image/'.$news->image) }}" height="300px" width="100%">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div style="text-align: justify">{!! $news->body !!}</div>
      </div>
    </div>

</div>
@endsection