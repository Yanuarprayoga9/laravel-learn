@extends('layouts.components.MainLayout')
@section('title','Home')
@section('content')
<div class="  my-5  d-flex justify-content-between">
    <a href="/student-add" class="btn btn-success">add data</a>
    <a href="" class="btn btn-info">show deleted data</a>
</div>
@if (Session::has('status'))
<div class="alert alert-success" role="alert">
    {{ Session::get('status') }}  </div>
    
@endif
@if (Session::has('statusdelete'))
<div class="alert alert-success" role="alert">
    {{ Session::get('statusdelete') }}  </div>
    
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>Nis</th>
            <th>gender</th>
            <th>opsi</th>
            {{-- <th>Kelas id</th>
            <th>Kelas</th>
            <th>Extra</th>
            <th>walikelas</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($studentList as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['nis'] }}</td>
            <td>{{ $item['gender'] }}</td>
            {{-- <td>{{ $item['class_id'] }}</td>
            <td>{{ $item->class['name'] }}</td>
            <td>
                 @foreach ($item->extracurriculars as $extracurricular)
                    {{ $extracurricular->name }} <br>
                @endforeach    
            </td>
            <td>{{ $item->class->homeroomTeacher->name }}</td> --}}
            <td>
                <a href="student/{{ $item->id }}" class="btn btn-warning">
                    detail
                </a>
                <a href="student-edit/{{ $item->id }}" class="btn btn-warning">
                    edit
                </a>
                <a href="student-deleteR/{{ $item->id }}" class="btn btn-danger">
                    deleteR
                </a>
                {{-- <a href="student-delete/{{ $item->id }}" class="btn btn-warning">
                    delete
                </a> --}}
                <form action="student-delete/{{ $item->id }}" method="POST">
                @csrf
                @method('delete')
                    <button class="btn btn-danger" type="submit" onclick="confirmDelete({{ $item->id }})">
                        delete
                    </button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<script>
   function confirmDelete(studentId) {
    const confirmD = new Promise((resolve, reject) => {
        const confirmation = confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?');
        if (confirmation) {
            resolve();
        } else {
            reject();
        }
    });

    confirmD.then(() => {
        document.getElementById('delete-form-' + studentId).submit();
    }).catch(() => {
    });
}

    setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 3000); 
    </script>
@endsection