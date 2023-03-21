@extends('layout.main')

@section('container')
<h2 class="text-center">Update projek</h2>

<form class="col-sm" method="POST" action="/project/updateproject/{{ $projects->id }}">
    @csrf
    @method('put')
    <div class="mb-3 col-sm">
        <label for="nama_projek" class="form-label">Nama Projek</label>
        <input type="text" class="form-control" id="nama_projek" name="nama_projek" placeholder="Nama projek" value="{{ $projects->nama_projek }}">
    </div>
    <div class="mb-3 col-md">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $projects->keterangan }}"></input>
    </div>
    <div class="mb-3 col-sm">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status" placeholder="Status" value="{{ $projects->status }}">
    </div>

    <button class="btn btn-primary" type="submit">Update project</button>
</form>

@endsection
