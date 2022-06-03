@extends('layout.main')

@section('container')
<div class="container mt-5">
    <div class="row">
      <!-- Berita Gampong Neuhen -->
      <div class="col-md-8">
        <div class="row mb-3">
          <h2>Berita Gampong Neuhen</h2>
          <hr>
        </div>
  
        @foreach($news as $item)
        <div class="card mb-3" style="width: 100%;">
            <img src="{{ url('storage/news-image/'.$item->image) }}" class="card-img-top" height="340px">
            <div class="card-body">
              <h5><a href="{{ url($item->slug.'/show') }}" class="card-text pengumuman">{{ $item->title }}</a></h5>
              <p class="card-text"><small class="text-muted">{{ $item->created_at->translatedFormat('l, d F Y') }}</small></p>
              <p class="card-text">{{ substr(strip_tags($item->body), 0, 300) }}... <a href="{{ url($item->slug.'/show') }}" class="text-decoration-none">Selengkapnya</a></p>
            </div>
          </div>
        @endforeach
        {{ $news->links() }}
      </div>


      <!-- Akhir Berita Gampong Neuhen -->
  
  
      <div class="col-md-1"></div>
  
      <!-- Recent News -->
      <div class="col-md-3">
        <div class="row mb-3 mt-3">
          <h5>Terakhir Diupdate</h5>
          <hr>
        </div>
        <!-- Konten Recent News -->
        @foreach($recent_news as $item)
        <div class="card mb-1" style="width: 100%;">
          <div class="card-body">
            <h6>
              <a href="{{ url($item->slug.'/show') }}" class="card-text pengumuman">{{ $item->title }}</a>
            </h6>
            <p class="card-text"><small class="text-muted">{{ $item->created_at->translatedFormat('l, d F Y') }}</small></p>
          </div>
        </div>
        @endforeach
      </div>
        <!-- Akhir Konten Recent News -->
  
    </div>
  
  
  
  
</div>
@endsection