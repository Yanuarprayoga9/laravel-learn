@extends('layouts.components.MainLayout')
@section('title', 'class')
@section('content')
    <h1>ini adalah page class</h1>
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>Kelas</th>
                <th>nama</th>
                <th>Homeroom</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($class as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data['name'] }}</td>
                <td>
                    @foreach ($data->students as $student)
                        {{ $student->name }},
                    @endforeach
                </td>
                <td>{{ $data->homeRoom['name'] }}</td>

        
            </tr>
            @endforeach
        </tbody>
    
    </table>
@endsection
