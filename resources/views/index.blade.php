@extends('layout.main')

@section('container')
<section>
  <div class="row">
    <div class="col-12">
      <div id="carouselExampleCaptions" class="carousel slide border border-success" data-bs-ride="carousel">
          <div class="carousel-indicators">
            @foreach($recent_gallery as $item)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->iteration-1 }}" class="{{ $loop->iteration-1 === 0 ? 'active' : ''}}" aria-current="true" aria-label="Slide 1"></button>
            @endforeach
          </div>
          <div class="carousel-inner">
            @foreach($recent_gallery as $item)
            <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : ''}}">
              <img src="{{ url('storage/galleries/'.$item->image) }}" class="d-block w-100" height="350px">
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
    </div>
  </div>
</section>

<div class="container mt-5">
  <div class="row">
    <!-- Berita Terkini -->
    <div class="col-md-8">
      <div class="row mb-3">
        <h2>Berita Gampong Terkini</h2>
        <hr>
      </div>

      @foreach($recent_news as $item)
      <div class="card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ url('storage/news-image/'.$item->image) }}" class="img-fluid rounded-start" style="display: block;position: relative;height: 100%;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text">{{ substr(strip_tags($item->body),0, 100) }} ... <a href="{{ url($item->slug.'/show') }}" class="text-decoration-none">Selengkapnya</a></p>
              <p class="card-text"><small class="text-muted">terakhir diupdate {{ $item->created_at->translatedFormat('l, d F Y') }}</small></p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>


    <!-- Akhir Berita Terkini -->
    <div class="col-md-1"></div>

    <!-- Pengumuman -->
    <div class="col-md-3">
      <div class="row mb-3 mt-3">
        <h5>Pengumuman</h5>
        <hr>
      </div>
      <!-- Konten Pengumuman -->
      @foreach($recent_announcement as $item)
      <div class="card mb-1" style="width: 100%;">
        <div class="card-body">
          <h6>
            <a href="#" class="card-text pengumuman">{{ $item->announcement }}</a>
          </h6>
          <p class="card-text"><small class="text-muted">{{ $item->created_at->translatedFormat('l, d F Y') }}</small></p>
        </div>
      </div>
      @endforeach
      <!-- Akhir Konten Pengumuman -->

    </div>
    <!-- Akhir Pengumuman -->
  </div>

  <div class="row">
    <div class="col-md-8">
      <!-- Kegiatan Gampong -->
      <div class="row mb-3">
        <h2>Kegiatan Gampong</h2>
        <hr>
      </div>

      <div class="row">
        <div id="kegiatanGampong" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#kegiatanGampong" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#kegiatanGampong" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#kegiatanGampong" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            @foreach($recent_activity as $item)
            <div class="carousel-item {{ $loop->iteration === 1 ? 'active' : '' }}">
              <img src="{{ url('storage/activities-image/'. $item->image) }}" class="d-block w-100" height="320px">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $item->name }}</h5>
                <p>{{ $item->description }}</p>
              </div>
            </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#kegiatanGampong" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#kegiatanGampong" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>
      <!-- Akhir Kegiatan Gampong -->
    </div>

    <div class="col-md-1"></div>


    <div class="col-md-3">
      <div class="row mt-3">
        <h5><i class="fa-solid fa-user"></i> Aparatur Desa</h5>
        <hr>
      </div>

      <div class="row mt-3">
        <div id="aparaturDesa" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://www.tagar.id/Asset/uploads2019/1571857749592-zainudin-amali.jpg" class="d-block w-100" height="320px">
            </div>
            <div class="carousel-item">
              <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/Transportation_Minister_Budi_Karya_Sumadi.jpg" class="d-block w-100" height="320px">
            </div>
            <div class="carousel-item">
              <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/Transportation_Minister_Budi_Karya_Sumadi.jpg" class="d-block w-100" height="320px">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#aparaturDesa" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#aparaturDesa" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>




</div>
@endsection