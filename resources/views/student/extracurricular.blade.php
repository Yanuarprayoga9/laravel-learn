@extends('layouts.components.MainLayout')
@section('title', 'extra')
@section('content')
    <h1>ini adalah page extra</h1>
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>extra</th>
                <th>details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($extraList as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->name }}</td>
                <td>
                   <a href="extra/{{ $data->id }}">details</a>
                </td>
        
            </tr>
            @endforeach
        </tbody>
    
    </table>
@endsection