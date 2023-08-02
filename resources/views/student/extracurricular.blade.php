@extends('layouts.components.MainLayout')
@section('title', 'class')
@section('content')
    <h1>ini adalah page class</h1>
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>extra</th>
                <th>anggota</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extraList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>
                    @foreach ( $data->students  as $data )
                        -{{ $data->name }}<br>
                    @endforeach
                </td>
        
            </tr>
            @endforeach
        </tbody>
    
    </table>
@endsection