@extends('layouts.components.MainLayout')
@section('title', 'class')
@section('content')
    <h1>ini adalah page class</h1>
    <div class="my-5">
        <a href="/class-add" class="btn btn-success">add data</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>Kelas</th>
                <th>detail</th>
                {{-- <th>nama</th>
                <th>Homeroom</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($class as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data['name'] }}</td>
                {{-- <td>
                    @foreach ($data->students as $student)
                        {{ $student->name }},
                    @endforeach
                </td> --}}
                {{-- <td>{{ $data->homeroomTeacher['name'] }}</td> --}}
                <td>
                    <a href="class/{{ $data->id }}">detail</a>
                    <a href="class-edit/{{ $data->id }}">edit</a>
                </td>
        
            </tr>
            @endforeach
        </tbody>
    
    </table>
@endsection
