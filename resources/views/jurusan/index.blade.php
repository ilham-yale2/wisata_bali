@extends('layout.tugas2')

@section('title','jurusan')

@section('container')
<div class="container mt-5" id="data-jurusan">
    <div class="d-flex">
        <h1>Daftar Jurusan</h1>
        <div class="ml-auto mt-2">
            <button class="btn btn-primary rounded" id="btn-add"><i class="fas fa-plus"></i> Tambah Data</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12" id="dataJurusan">
           
        </div>
    </div>
</div>
<div class="container mt-5" id="form-jurusan">

    <h1 class="mt-4 data-title"></h1>
    <div class="row">
        <div class="col-md-8">
            <form action="" id="formData">
                @csrf
                <div class="form-group">
                    <label for="nama_jurusan">Nama Jurusan</label>
                    <input type="text" class="form-control" id="nama_jurusan" autocomplete="off"
                        name="nama_jurusan" >

                </div>
                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <select name="prodi" id="prodi" class="form-control">
                        <option disabled id="default-option">Pilih Prodi</option>
                        <option value="Teknologi Permesinan">Teknologi Permesinan</option>
                        <option value="Teknologi Informatika">Teknologi Informatika</option>
                        <option value="Teknologi Pertanian">Teknologi Pertanian</option>
                    </select>
                </div>
                <input type="hidden" name="id" id="id">
                <div class="d-inline mb-5">
                    <button class="btn btn-primary " id="btn-tambah" onclick="tambahJurusan()" type="button">Tambah</button>
                    <button class="btn btn-primary " onclick="updateJurusan()" id="btn-update"
                        type="button">Update</button>
                    <button class="btn btn-secondary" id="btn-cancel-jurusan" type="button">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    function loadJurusan() {
        $.get("{{url('/dataJurusan')}}", function (data) {
            $('#dataJurusan').html(data);
        })
    };

    function resetForm(){
        $('#nama_jurusan').val('');
        $('#id').val('');
    }
    $(document).ready(function () {
        loadJurusan();
        $('#form-jurusan').hide();
        $('#data-jurusan').show();

    })

    $('#btn-add').click(function (){
        $('#form-jurusan').show();
        $('#data-jurusan').hide();
        $('#btn-update').hide();
        $('#btn-tambah').show();
        $('.data-title').html('Tambah Jurusan');
        $('#default-option').attr("selected", "selected");
    })

    $('#btn-cancel-jurusan').click(function (){
        $('#form-jurusan').hide();
        $('#data-jurusan').show();
        resetForm();
        $('#prodi option').removeAttr('selected');
    })

    function setUp(){
        token = $('input[name=_token').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': token
            }
        });
    }
    function tambahJurusan(){
        setUp();
        $('span').remove('.invalid-feedback');
        $('input , select').removeClass('is-invalid');

        $.ajax({
            url : "{{url('/jurusan')}}",
            method : "POST",
            data: $('form').serialize(),
            success: function (response) {
                $('#form-jurusan').hide();
                $('#data-jurusan').show();
                resetForm();
                loadJurusan();
                Swal.fire('Data Jurusan', 'Berhasil Ditambahkan', 'success');
            },
            error: function (xhr) {
                var res = xhr.responseJSON;
                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {
                        $('#' + key)
                            .closest('.form-control')
                            .addClass('is-invalid')
                            .after(' <span class="invalid-feedback"><strong>' + value + '</strong> </span> ')
                    })
                }
            }
        })
    }

    function editJurusan(id){
        var url = "{{url('/jurusan')}}/" + id,
            method = 'PATCH';
        setUp();

        $.ajax({
            url: url,
            method: method,
            success: function (res) {
                $('#form-jurusan').show();
                $('#data-jurusan').hide();
                $('#nama_jurusan').val(res.jurusan.nama_jurusan);
                $("select option[value= '" + res.jurusan.prodi + "']").attr("selected", "selected");
                $('#id').val(res.jurusan.id);
                $('#btn-update').show();
                $('#btn-tambah').hide();
                $('.data-title').html('Update Jurusan');
                
            }

        });
    }

    function updateJurusan(){
        var id = $('#id').val();

        setUp();
        $('span').remove('.invalid-feedback');
        $('input , select').removeClass('is-invalid');

        $.ajax({
            url: "{{url('/jurusan')}}/" + id,
            method: 'PUT',
            data: $('form').serialize(),
            success: function (response) {
                $('#form-jurusan').hide();
                $('#data-jurusan').show();
                resetForm();
                loadJurusan();
                Swal.fire('Data Jurusan', 'Berhasil Di Update', 'success');
            },
            error: function (xhr) {
                var res = xhr.responseJSON;
                if ($.isEmptyObject(res) == false) {
                    $.each(res.errors, function (key, value) {
                        $('#' + key)
                            .closest('.form-control')
                            .addClass('is-invalid')
                            .after(' <span class="invalid-feedback"><strong>' + value + '</strong> </span> ')
                    })
                }
            }
        })
    }
    
    function deleteJurusan(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't  delete this record!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                token = $('input[name=_token').val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': token
                    }
                });

                $.ajax({
                    url: "{{url('/jurusan')}}/" + id,
                    type: 'POST',
                    data: {
                        _token: token,
                        _method: 'DELETE',
                        id: id,
                    },
                    success: function (response) {
                        loadJurusan();
                        Swal.fire('Data Jurusan', 'Berhasil Dihapus', 'success');
                    }
                })
            } else {
                Swal.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }

</script>
@endsection
