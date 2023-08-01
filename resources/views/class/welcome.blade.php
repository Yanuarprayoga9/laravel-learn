@extends('layouts.components.MainLayout')
@section('title', 'class')
@section('content')
    <h1>ini adalah page class</h1>
    <ol>
        @foreach ($class as $item)
            <li>{{ $item['name'] }}</li>
            <li>{{ $item->student['name'] }}</li>
        @endforeach
    </ol>
@endsection
