@section('title', 'STUDENTS')
@extends('layouts.components.mainlayout');
@section('content')
    <h1>HOME</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>gender</th>
                <th>NIS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $student)
                <tr>
                    <td>{{ $student['id'] }}</td>
                    <td>{{ $student['name'] }}</td>
                    <td>{{ $student['gender'] }}</td>
                    <td>{{ $student['nis'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
