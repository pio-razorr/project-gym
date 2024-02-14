@extends('admin.layout.main')

@section('title', 'Jadwal')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data jadwal</h6>
    </div>
    <div class="card-body">
        <a href="/tambah-jadwal" class="btn btn-primary mb-3">Tambah jadwal</a>

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    @if ($jadwal->count() > 0)
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Nama Pelatih</th>
                            <th>Durasi Kelas</th>
                            <th>Jam</th>
                            <th>Hari</th>
                            <th>Image</th>
                            <th>Aksi</th>
                        </tr>
                    @else
                        <h2 class="m-0 text-center">Data kosong</h2>
                    @endif
                </thead>
                <tbody>
                    @foreach ($jadwal as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_kelas }}</td>
                            <td>{{ $data->nama_pelatih }}</td>
                            <td>{{ $data->durasi_kelas }}</td>
                            <td>{{ $data->jam }}</td>
                            <td>{{ $data->hari }}</td>
                            <td>
                                <img src="{{ asset('/storage/posts/' . $data->image) }}" width="100">
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ '/edit-jadwal/' . $data->id }}" class="btn btn-info btn-circle mr-2">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <form action="{{ '/jadwal-kelas/' . $data->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-info btn-circle icon btn-danger"
                                            data-confirm-delete="true">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
