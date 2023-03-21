@extends('layout.main')

@section('container')
<h2 class="text-center">Tambah projek</h2>

<form class="col-sm" method="POST" action="/project/addproject">
    @csrf
    <div class="mb-3 col-sm">
        <label for="nama_projek" class="form-label">Nama Projek</label>
        <input type="text" class="form-control" id="nama_projek" name="nama_projek" placeholder="Nama projek">
    </div>
    <div class="mb-3 col-md">
        <label for="keterangan" class="form-label">Keterangan</label>
        <input type="text" class="form-control" id="keterangan" name="keterangan"></input>
    </div>
    <div class="mb-3 col-sm">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status" placeholder="Status">
    </div>

    <button class="btn btn-primary" type="submit" value="submit">Tambah project</button>
</form>

@endsection
