@extends('admin.layout.main')

@section('container')
<div class="container-fluid px-4">
    <h1 class="mt-4">{{ $title }}</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}" class="text-decoration-none">Dashboard</a></li>
        <li class="breadcrumb-item active">{{ $title }}</li>
    </ol>
    <div class="row">
        <div class="col-md-9">
          <a href="{{ url('/admin/dusun/create') }}" class="btn btn-primary mb-3">Tambah Dusun</a>
        </div>
      </div>
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
                        <th>Nama Dusun</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Dusun</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($dusun as $dsn)
                    <tr>
                        <td class="col-1">{{ $loop->iteration }}</td>
                        <td class="col-2">{{ $dsn->nama_dusun }}</td>
                        <td class="col-1">
                            {{-- <a href="{{ url('/admin/kegiatan-gampong/'.$activity->id) }}" class="badge bg-info"><i class="fas fa-eye"></i></a> --}}
                            <a href="{{ url('/admin/dusun/'.$dsn->id.'/edit') }}" class="badge bg-warning"><i class="fas fa-edit"></i></a>
                            <a href="#" class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-url="{{ url('admin/dusun/'.$dsn->id) }}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Yakin ingin menghapus data ini?
          <p class="title" style="font-weight: bold"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
          <form action="" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  
<script>
    var deleteModal = document.getElementById('deleteModal')
    deleteModal.addEventListener('show.bs.modal', function (event) {
    var button = event.relatedTarget
  
    var url = button.getAttribute('data-url')
    var urlInput = deleteModal.querySelector('form')
    urlInput.setAttribute("action", url)

  })
</script>
@endsection