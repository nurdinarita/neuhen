<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>{{ $title }}</title>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
        <link href="{{ url('css/admin/css/style.css') }}" rel="stylesheet" />
        <link href="{{ url('css/admin/css/styles.css') }}" rel="stylesheet" />
        
        <script src="{{ url('css/fontawesome/all.min.js') }}" ></script>

        <link rel="stylesheet" type="text/css" href="{{ url('trix-editor/trix.css') }}">
        <script type="text/javascript" src="{{ url('trix-editor/trix.js') }}"></script>

        <style>
            trix-toolbar [data-trix-button-group="file-tools"] {
                display: none;
            }
        </style>
        {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ url('/') }}">Gampong Neuhen</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                {{-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div> --}}
            </div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Profil</a></li>
                        <li><a class="dropdown-item" href="#!">Ubah Password</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ url('/admin/dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Postingan</div>
                            <a class="nav-link {{ Request::is('admin/berita-gampong') || Request::is('admin/berita-gampong/create') || $title === 'Detail Berita' || $title === 'Edit Berita' ? 'active' : ''}}" href="{{ url('/admin/berita-gampong') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-pager"></i></div>
                                Berita Gampong
                            </a>
                            <a class="nav-link {{ Request::is('admin/kegiatan-gampong') || Request::is('admin/kegiatan-gampong/create') || $title === 'Edit Kegiatan' ? 'active' : '' }}" href="{{ url('admin/kegiatan-gampong') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Kegiatan Gampong
                            </a>
                            <a class="nav-link {{ Request::is('admin/pengumuman') || Request::is('admin/pengumuman/create') || $title === 'Edit Pengumuman' ? 'active' : '' }}" href="{{ url('admin/pengumuman') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                                Pengumuman
                            </a>
                            <a class="nav-link {{ Request::is('admin/gallery') || Request::is('admin/gallery/create') ? 'active' : '' }}" href="{{ url('admin/gallery') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                                Gallery
                            </a>
                            <div class="sb-sidenav-menu-heading">Aparatur Desa</div>
                            <a class="nav-link {{ Request::is('admin/organizations') || $title == 'Edit Struktur Organisasi' || $title == 'Tambah Struktur Organisasi' || $title == 'Detail Struktur Organisasi' ? 'active' : '' }}" href="{{ url('admin/organizations') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-sitemap"></i></div>
                                Struktur Organisasi
                            </a>
                            <a class="nav-link" href="{{ url('admin/formulir-masuk') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                                Formulir Masuk
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Administrator
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('container')
                </main>
                
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ url('js/admin/scripts.js') }}"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ url('js/datatables-simple-demo.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="{{ url('js/admin/datatables-simple-demo.js') }}"></script>
        <script>
            document.addEventListener('trix-file-accept', function(e){
                e.preventDefault();
            })
        </script>

        @include('sweetalert::alert')
        @yield('slug')

    </body>
</html>
