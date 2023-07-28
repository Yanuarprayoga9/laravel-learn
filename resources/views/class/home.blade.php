@section('title', 'CLASS')
@extends('layouts.components.mainlayout');
@section('content')
    <h1>Class HOME</h1>
        <table class="table table-info">
            <thead>
                <tr>
                    <th>id</th>
                    <th>kelas</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($classList as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
@endsection
