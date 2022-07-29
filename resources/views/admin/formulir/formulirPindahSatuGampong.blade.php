@extends('admin.layout.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="text-decoration-none">Dashboard</a></li>
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            {{ $title }}
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor KK</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                        <th>No</th>
                        <th>Nomor KK</th>
                        <th>Nama Kepala Keluarga</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($data as $dt)
                    <tr>
                        <td class="col-1">{{ $loop->iteration }}</td>
                        <td class="col-2">{{ $dt->nomor_kk }}</td>
                        <td>{{ $dt->nama_kepala_keluarga }}</td>
                        <td class="col-1">
                            <a href="{{ url('/admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-gampong/'.$dt->id) }}" class="badge bg-info"><i class="fas fa-eye"></i></a>
                            <a href="#" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-url="{{ url('/admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-gampong/'.$dt->id) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection