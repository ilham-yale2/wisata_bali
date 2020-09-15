
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col" width="5%">#</th>
            <th scope="col">Nama Jurusan</th>
            <th scope="col">Prodi</th>
            <th scope="col" width="14%">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $jurusan as $jrs )
        <tr class="border-bottom">
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $jrs->nama_jurusan }}</td>
            <td>{{ $jrs->prodi }}</td>
            <td class="justify-content-center">
                <button class="btn btn-success" onclick="editJurusan({{ $jrs->id}})"><i class="fas fa-pencil-alt"></i></button> |
                <button class="btn btn-danger" onclick="deleteJurusan({{ $jrs->id}})"><i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
