@extends('layout.main')

@section('container')
<div class="container mt-5">
    <div class="row">
      <!-- Kegiatan Gampong Neuhen -->
      <div class="col-md-12">
        <div class="row mb-3">
          <h2>Kegiatan Gampong Neuhen</h2>
          <hr>
        </div>
  
        <div class="row">
          @foreach($activities as $item)
          <div class="col-4">
            <div class="card" style="width: 100%;">
              <img src="{{ asset('storage/activities-image/'.$item->image) }}" class="card-img-top" alt="{{ $item->title }}">
              <div class="card-body">
                <p class="card-text"><small class="text-muted">{{ $item->created_at->translatedFormat('l, d F Y') }}</small></p>
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ $item->description }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        {{ $activities->links() }}
      </div>


      <!-- Akhir Kegiatan Gampong Neuhen -->
  
    </div>
  
  
  
  
</div>
@endsection