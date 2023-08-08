@extends('layouts.components.MainLayout')
@section('title', 'class')
@section('content')
    <h1>ini adalah page walikelas</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacher as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="teacher/{{ $item->id }}">details</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
