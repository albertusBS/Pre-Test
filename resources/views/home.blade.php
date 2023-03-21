@extends('layout.main')

@section('container')

<div class="container-fluid">
    <h2 class="text-center">Daftar Projek</h2>

    @can('GardenerOrDesigner')
        <a class="btn btn-primary" href="/project/addproject" type="button" value="input">Tambah Projek</a>
    @endcan

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Projek</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Status</th>
                @can('GardenerOrDesigner')
                    <th scope="col">Aksi</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row"> {{ $project->id }} </th>
                    <td> {{ $project->nama_projek }} </td>
                    <td> {{ $project->keterangan }} </td>
                    <td> {{ $project->status }} </td>
                    @can('GardenerOrDesigner')
                        <td>
                            <a href="/project/updateproject/{{ $project->id }}" type="button" class="btn btn-primary">Update</a>
                        </td>
                        <td>
                            <a href="/hapus/{{ $project->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    @endcan
               </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
