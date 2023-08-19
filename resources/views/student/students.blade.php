@extends('layouts.components.MainLayout')
@section('title', 'Home')
@section('content')
    <div class="  my-5  d-flex justify-content-between">
        <a href="/student-add" class="btn btn-success">add data</a>
        <div class="action ">
            <div class="seacrh">
               <form action="" method="get">
                
               </form>
            </div>
            <a href="/student-deleted" class="btn btn-info">show deleted
                data
            </a>
        </div>
    </div>
    @if (Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('status') }} </div>
    @endif
    @if (Session::has('statusUpdate'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('statusUpdate') }} </div>
    @endif
    @if (Session::has('statusdelete'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('statusdelete') }} </div>
    @endif
    <form action="" method="get">
        <div class="input-group mb-3 w-50">
            <input type="text" class="form-control" placeholder="name or anything" name="keyword" aria-label="Username" aria-describedby="basic-addon1">
            <button class="input-group-text btn btn-outline-success" id="basic-addon1" type="submit">search</button>
          </div>  
    </form>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>Nis</th>
                <th>gender</th>
                <th>class</th>
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
                    <td>{{ $item->class->name }}</td>
                    {{-- <td>{{ $item['class_id'] }}</td>
            <td>{{ $item->class['name'] }}</td>
            <td>
                 @foreach ($item->extracurriculars as $extracurricular)
                    {{ $extracurricular->name }} <br>
                @endforeach    
            </td>
            <td>{{ $item->class->homeroomTeacher->name }}</td> --}}
                    <td>
                        <div class="d-flex gap-1 justify-content-center">
                            <a href="student/{{ $item->id }}" class="btn btn-warning">
                                detail
                            </a>
                            <a href="student-edit/{{ $item->id }}" class="btn btn-warning">
                                edit
                            </a>
                            <a href="student-deleteR/{{ $item->id }}" class="btn btn-danger">
                                delete
                            </a>

                            {{-- <form action="student-delete/{{ $item->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit" onclick="confirmDelete({{ $item->id }})">
                                    delete
                                </button>
                            </form> --}}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
 <div class="my-5">
    {{ $studentList->withQueryString()->links() }}
 </div>
@endsection

