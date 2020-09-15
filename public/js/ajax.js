function loadData() {
    $.get('dataStudents', function (data) {
        $('#dataStudents').html(data);
    })
}

function resetData() {
    $('#nama').val('');
    $('#email').val('');
    $('#nisn').val('');
    $('#jurusan option').removeAttr("selected");
    $('#disabled option').attr("selected", "selected");
}

$(document).ready(function () {
    loadData();
    resetData();
    $('.data-panel').show();
    $('.data-form').hide();

    $('.btn-tambah').click(function () {
        $('.data-panel').hide();
        $('.data-form').show();
        $('#btn-save').show();
        $('#btn-update').hide();
        $('.data-title').html('Tambah Data Student');
        $('#disabled-option').attr("selected", "selected");

    });

    $('.btn-cancel').click(function () {
        $('.data-panel').show();
        $('.data-form').hide();
        resetData();
        $('span').remove('.invalid-feedback');
        $('input , select').removeClass('is-invalid');
        $('#jurusan option').removeAttr("selected");
    });
});

function deleteData(id) {
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
                url: "{{url('/siswa')}}/" + id,
                type: 'POST',
                data: {
                    _token: token,
                    _method: 'DELETE',
                    id: id,
                },
                success: function (response) {
                    loadData();
                    Swal.fire('Data Siswa', 'Berhasil Dihapus', 'success');
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

$('#btn-save').click(function () {
    
    var form = $('#formData'),
        url = "{{url('/siswa')}}",
        method = 'POST',
        token = $('input[name=_token').val();

    $('span').remove('.invalid-feedback');
    $('input , select').removeClass('is-invalid');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });

    $.ajax({
        url: url,
        method: method,
        data: form.serialize(),
        success: function (response) {
            $('.data-panel').show();
            $('.data-form').hide();
            resetData();
            loadData();
            $('#disabled-option').attr("selected", "selected");
            Swal.fire('Data Siswa', 'Berhasil Ditambahkan', 'success');
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

});

function editData(id) {

    var url = "{{url('/siswa')}}/" + id,
        method = 'PATCH',
        token = $('input[name=_token').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });
    $.ajax({
        url: url,
        method: method,
        success: function (res) {
            $('.data-form').show();
            $('.data-panel').hide();
            $('#nama').val(res.student.nama);
            $('#nisn').val(res.student.nisn);
            $('#email').val(res.student.email);
            $("select option[value= '" + res.student.jurusan + "']").attr("selected", "selected");
            $('#id').val(res.student.id);
            $('#btn-save').hide();
            $('#btn-update').show();
            $('.data-title').html('Edit Data Student');
        }

    });

}

function updateData() {
    var id = $('#id').val();
    var url = "{{url('/siswa')}}/" + id,
        method = 'PUT',
        token = $('input[name=_token').val(),
        form = $('#formData');

    $('span').remove('.invalid-feedback');
    $('input , select').removeClass('is-invalid');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': token
        }
    });

    $.ajax({
        url: url,
        method: method,
        data: form.serialize(),
        success: function (response) {
            $('.data-panel').show();
            $('.data-form').hide();
            resetData();
            loadData();
            Swal.fire('Data Siswa', 'Berhasil Diupdate', 'success');
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
