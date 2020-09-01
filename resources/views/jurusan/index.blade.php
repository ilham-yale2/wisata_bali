@extends('layout.tugas2')

@section('title','jurusan')

@section('container')
<div class="container mt-5">
    <h1>Daftar Siswa</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" width="5%">#</th>
                        <th scope="col">Nama Jurusan</th>
                        <th scope="col">Created at</th>
                        <th scope="col" width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $jurusan as $jrs )
                    <tr class="border-bottom">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $jrs->nama_jurusan }}</td>
                        <td>{{ $jrs->created_at }}</td>
                        <td class="justify-content-center">
                            <a href="#" class="badge badge-success"><i class="fas fa-pencil-alt"></i></a> | 
                            <a href="#" class="badge badge-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
