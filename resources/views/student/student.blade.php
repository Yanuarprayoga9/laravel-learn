@extends('layouts.components.Details')
@section('detail', 'Student')
@section('title', 'Home')
@section('content')
<div class=" container text-center">
        halo ini detail student <br>
        <h1 class="text-primary">{{ $studentList->name }}</h1>
        @if ($studentList->image != '' )
        <img src="{{ asset('storage/photo/'.$studentList->image) }}" alt="" style="width: 100px; height:100px;" class="mx-auto d-block">
            
        @else
        <img src="https://picsum.photos/200" alt="" style="width: 100px; height:100px;" class="mx-auto d-block">

        
        @endif
    </div>
    {{ $studentList->image }}
    <table class="table table-bordered">
        <thead>
            <th>no</th>
            <th>nis</th>
            <th>kelas</th>
            <th>walikelas</th>
            <th>extra</th>
        </thead>
        <tbody>
            <td>1</td>
            <td>{{ $studentList->nis }}</td>
            <td>{{ $studentList->class->name }}</td>
            <td>
                {{ $studentList->class->homeroomTeacher->name }}
            </td>
            <td>
                @foreach ($studentList->extracurriculars as $extracurricular)
                    {{ $extracurricular->name }}
                @endforeach
            </td>
        </tbody>
    </table>
    <div class="container d-flex justify-content-end">
        <a class="btn btn-danger " href="/students">back</a>
    </div>
@endsection
