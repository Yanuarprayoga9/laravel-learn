@extends('layouts.components.MainLayout')
@section('title', 'Home')
@section('content')


    halo ini detail student <br>
    <ol>
        <li>
            nama {{ $studentList->name }}
        </li>
        <li>
            kelas {{ $studentList->class->name }}
        </li>
        <li>
            @if ($studentList->gender == "male" || "Male")
                laki-laki
            @elseif ($studentList->gender == "female" || "Female")
                perempuan
            
            @endif
        </li>
        <li>
            walikelas {{ $studentList->class->homeroomTeacher->name }}
        </li>
        <li>
            @foreach ($studentList->extracurriculars as $extracurricular)
                {{ $extracurricular->name }}
            @endforeach
        </li>
    </ol>

@endsection
