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
            {{-- <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Struktur</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Struktur</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($organizations as $organization)
                    <tr>
                        <td class="col-1">{{ $loop->iteration }}</td>
                        <td class="col-2">{{ $organization->year }}</td>
                        <td><img src="{{ asset('storage/organizations-image/'.$organization->image) }}" height="200px"></td>
                        <td class="col-1">
                            <a href="{{ url('/admin/organizations/'.$organization->id) }}" class="badge bg-info"><i class="fas fa-eye"></i></a>
                            <a href="{{ url('/admin/organizations/'.$organization->id.'/edit') }}" class="badge bg-warning"><i class="fas fa-edit"></i></a>
                            <a href="#" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-url="{{ url('admin/organizations/'.$organization->id) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table> --}}
            <ol>
              <li><a href="{{ url('admin/formulir-masuk/formulir-permohonan-pindah-wni-dalam-satu-gampong') }}" class="text-decoration-none">FORMULIR PERMOHONAN PINDAH WNI (Dalam Satu Gampong)</a></li>
              <li><a href="" class="text-decoration-none">SURAT KETERANGAN PINDAH/MASUK GAMPONG NEUHEN (Dalam Satu Kabupaten / Antar Kecamatan)</a></li>
              <li><a href="" class="text-decoration-none">SURAT KETERANGAN PINDAH/MASUK GAMPONG NEUHEN (Dalam Antar Kabupaten / Antar Provinsi)</a></li>
              <li><a href="" class="text-decoration-none">AKTE KELAHIRAN</a></li>
              <li><a href="" class="text-decoration-none">AKTE KEMATIAN</a></li>
            </ol>
        </div>
    </div>
</div>
@endsection