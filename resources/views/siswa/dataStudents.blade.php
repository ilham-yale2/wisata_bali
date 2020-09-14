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
                
               <button type="button" onclick="editData({{$student->id}})"  class="btn btn-success"><i class="fas fa-pencil-alt"></i></button> |
               <button type="button" onclick="deleteData({{$student->id}})"  class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
