@extends('layout.tugas2')

@section('title','index')

@section('container')
<div class="container data-panel mt-5">
    <div class="d-flex">
        <h1>Daftar Siswa</h1>
        <div class="ml-auto mt-2">
            <button class="btn btn-primary btn-tambah rounded"><i class="fas fa-plus"></i> Tambah Data</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12" id="dataStudents">
           
        </div>
    </div>
</div>

<div class="container data-form mt-5">

    <h1 class="mt-4 data-title"></h1>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ url ('/siswa') }}" id="formData">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Enter Full Name" autocomplete="off"
                        name="nama" value="{{ old('nama') }}">

                </div>
                <div class="form-group">
                    <label for="nisn">No Nisn</label>
                    <input type="text" class="form-control" id="nisn" autocomplete="off" placeholder="xxxxxxxxxx"
                        name="nisn" value="{{ old('nisn') }}">

                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control">
                        <option disabled id="disabled-option">Pilih Jurusan</option>
                        @foreach($jurusan as $jrs)
                        <option value="{{$jrs->nama_jurusan}}">{{$jrs->nama_jurusan}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control " id="email" placeholder="Enter your Email " autocomplete="off"
                        name="email" value="{{ old('email') }}">

                </div>
                <input type="hidden" name="id" id="id" > 
                <div class="d-inline mb-5">
                    <button class="btn btn-primary " id="btn-save" type="button">Tambah</button>
                    <button class="btn btn-primary " onclick="updateData()" id="btn-update" type="button">Update</button>
                    <button class="btn btn-secondary btn-cancel" type="button">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
