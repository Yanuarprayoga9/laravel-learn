@extends('layouts.components.MainLayout')
@section('title', 'Home')
@section('content')
    halo ini detail student <br>
    <h1 class="text-primary">{{ $studentList->name }}</h1>
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
@endsection
