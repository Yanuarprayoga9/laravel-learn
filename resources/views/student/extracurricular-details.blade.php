@extends('layouts.components.Details')
@section('detail', 'extra')
@section('title', 'extra')
@section('content')
<div class="my-5">
    <a href="" class="btn btn-success">add data</a>
</div>
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
