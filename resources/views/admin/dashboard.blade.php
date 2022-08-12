@extends('admin.layout.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <b><i class="fas fa-pager"></i> Berita Gampong</b>
                    <p>{{ $news }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <b><i class="fas fa-book-open"></i> Kegiatan Gampong</b>
                    <p>{{ $activity }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-secondary text-white mb-4">
                <div class="card-body">
                    <b><i class="fas fa-bullhorn"></i> Pengumuman Gampong</b>
                    <p>{{ $announcement }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-light text-dark mb-4">
                <div class="card-body">
                    <b><i class="fas fa-clipboard-list"></i> Formulir Masuk</b>
                    <p>{{ $total_formulir }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <b><i class="fas fa-clipboard-list"></i> Jumlah KK</b>
                    <p>{{ $kartu_keluarga }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <b><i class="fas fa-clipboard-list"></i> Jumlah Penduduk</b>
                    <p>{{ $total_penduduk }}</p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    <b><i class="fas fa-clipboard-list"></i> Total Dusun</b>
                    <p>{{ $dusun }}</p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection