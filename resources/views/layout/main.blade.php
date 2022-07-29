<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ url('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('css/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <title>{{ $title }}</title>

    <style>
    @import url('fonts/Dancing_Script.css');

    body {
        background-color: #ececec;
        overflow-x: hidden;
    }
    .container .row div h1{
      font-family: 'Dancing Script', cursive;
      font-size: 45px;
      font-weight: bold;
      text-align: center;
    }
    nav.navbar {
      font-size: 18px;
      background-color: rgb(255, 255, 255);
    }
    nav.navbar .container .navbar-collapse ul.navbar-nav li.nav-item a {
      padding: 6px 30px;
      font-weight: bold;
    }
    .dropdown-item:hover {
        transition: 0.5s;
        color: white;
        background-color: #383838;
    }
    .dropdown:hover>.dropdown-menu {
      display: block;
      width: 220px;
    }
    hr {
    border-top: 5px solid rgb(0, 255, 21);
    margin: auto;
    }

    a.pengumuman {
      color: black;
      /* font-weight: bold; */
      text-decoration: none;
      font-size: 18px;
      margin-bottom: 18px;
    }
    a.pengumuman:hover {
      color: rgb(0, 156, 83);
    }
    div.carousel-caption {
      background-color: #38383885;
      border-radius: 5px;
    }

    ul.dropdown-menu li a.active{
        color: white;
        background-color: #383838;
    }
    


    </style>

  </head>
  <body>
        <img src="{{ url('header.png') }}" height="5%" width="100%">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">BERANDA</a>
            </li>
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle {{ Request::is('sejarah')  || Request::is('visi&misi') || Request::is('struktur-organisasi') ? 'active' : '' }}" href="#" id="navbarDropdown">
                PROFIL
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item {{ Request::is('sejarah') ? 'active' : '' }}" href="{{ url('/sejarah') }}">Sejarah</a></li>
                <li><a class="dropdown-item {{ Request::is('visi&misi') ? 'active' : '' }}" href="{{ url('/visi&misi') }}">Visi & Misi</a></li>
                <li><a class="dropdown-item {{ Request::is('struktur-organisasi') ? 'active' : '' }}" href="{{ url('/struktur-organisasi') }}">Struktur Organisasi</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ Request::is('informasi/berita') ? 'active' : '' }}" href="#" id="navbarDropdown">
                INFORMASI
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item {{ Request::is('informasi/berita') ? 'active' : '' }}" href="{{ url('informasi/berita') }}">Berita</a></li>
                <li><a class="dropdown-item {{ Request::is('informasi/pengumuman') ? 'active' : '' }}"  href="{{ url('informasi/pengumuman') }}">Pengumuman</a></li>
                <li><a class="dropdown-item {{ Request::is('informasi/kegiatan') ? 'active' : '' }}" href="{{ url('informasi/kegiatan') }}">Kegiatan</a></li>
              </ul>
            </li>
            <li class="nav-item ">
              <a class="nav-link {{ Request::is('formulir') ? 'active' : '' }}" href="{{ url('formulir') }}">FORMULIR</a>
            </li>
          </ul>

          <div class="d-flex">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="{{ url('/login') }}" class="nav-link"><i class="fa-solid fa-right-to-bracket"></i> LOGIN</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    @yield('container')
    
    {{-- <footer class="mt-5" style="position: absolute; width: 100%;"> --}}
    <footer class="mt-5">
      <div class="card text-light bg-dark rounded-0 pt-4" style="position: absolute; width: 100%; left: 0px;">
      <div class="card-body">
          <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3 mb-3">
                <div class="row">
                  <h6>Kontak</h6>
                  <hr>
                  <div class="mt-3">
                    <p><i class="fa-brands fa-whatsapp"></i> +62 882-5674-8790</p>
                    <p><i class="fa-solid fa-phone"></i> +62 882-5674-8790</p>
                    <p><a href="mailto:gampoengneuhen@gmail.com" style="text-decoration: none; color: white;"><i class="fa-solid fa-envelope"></i> gampoengneuhen@gmail.com</a></p>
                  </div>
                </div>
                <div class="row">
                  <h6>Kode Pos</h6>
                  <hr>
                  <div class="mt-3">
                    <p><i class="fa-solid fa-mailbox"></i> 23381</p>
                  </div>
                </div>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3 mb-3">
                  <h6>Sosial Media</h6>
                  <hr>
                  <div class="mt-3">
                    <p>
                      <a class="btn btn-danger rounded-circle" href=""><i class="fa-brands fa-instagram"></i></a>
                      <a class="btn btn-primary rounded-circle" href=""><i class="fa-brands fa-facebook"></i></a>
                    </p>
                  </div>
              </div>
              <div class="col-md-4 mt-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63530.690242369674!2d95.37846670342955!3d5.615925848550057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30404a10585ae1b3%3A0x862696c42a5f6f50!2sKantor%20Keuchik%20Gp.%20Neuheun!5e0!3m2!1sid!2sid!4v1647270996834!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
          </div>
      </div>
      </div>
    </footer>



    
    <script src="{{ url('js/bootstrap/bootstrap.bundle.js') }}"></script>
    @include('sweetalert::alert')
  </body>
</html>