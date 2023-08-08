@extends('layouts.components.Details')
@section('detail', 'extra')
@section('title', 'extra')
@section('content')
   <h1>{{ $extraList->name }}</h1>
    <table class="table table-bordered">
        <thead>
            <th>mahasiswa</th>
        </thead>
        <tbody>
            <td>
                @foreach ( $extraList->students  as $item )
                    -{{ $item->name }} <br>
                @endforeach
            </td>
        </tbody>
    </table>
    <div class="container d-flex justify-content-end">
        <a class="btn btn-danger " href="/extra">back</a>
    </div>
@endsection
