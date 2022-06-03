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
  
        <div class="card mb-3" style="width: 100%;">
            <img src="{{ url('storage/news-image/'.$news->image) }}" class="card-img-top" height="340px">
            <div class="card-body">
              <h4>{{ $news->title }}</h4>
              <p class="card-text"><small class="text-muted">{{ $news->created_at->translatedFormat('l, d F Y') }}</small></p>
              <div class="mb-5">
                {!! $news->body !!}
              </div>
              
            </div>
          </div>

          <div class="row">
            <div class="col md-12 d-flex justify-content-between">
              @if(isset($prev->slug))
              <a href="{{ url($prev->slug.'/show') }}" class="btn btn-warning"><i class="fa-solid fa-backward"></i> Sebelumnya</a>
              @else
                <div></div>
              @endif
      
              @if(isset($next->slug))
              <a href="{{ url($next->slug.'/show') }}" class="btn btn-warning">Selanjutnya <i class="fa-solid fa-forward"></i></a>
              @else
                <div></div>
              @endif
            </div>
          </div>
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