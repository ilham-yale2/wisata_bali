@extends('layout.tugas2')

@section('title','Siswa')

@section('container')
<div class="container mt-5">
    <h1>Daftar Siswa</h1>
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $students as $student )
                    <tr class="border-bottom">
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->nisn }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->jurusan }}</td>
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
