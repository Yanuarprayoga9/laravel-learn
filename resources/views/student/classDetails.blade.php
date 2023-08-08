@extends('layouts.components.Details')
@section('detail', 'Class')
@section('title', 'Home')
@section('content')
   <h1>{{ $class->name }}</h1>
    <table class="table table-bordered">
        <thead>
            <th>kelas</th>
            <th>walikeklas</th>
            <th>mahasiswa</th>
        </thead>
        <tbody>
            <td>{{ $class->name }}</td>
            <td>{{ $class->homeroomTeacher->name }}</td>
            <td>
                @foreach ($class->students as $item )
                    -{{ $item->name }} <br>
                @endforeach
            </td>
        </tbody>
    </table>
    <div class="container d-flex justify-content-end">
        <a class="btn btn-danger " href="/class">back</a>
    </div>
@endsection
