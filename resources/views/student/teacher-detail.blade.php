@extends('layouts.components.Details')
@section('detail', 'teacher')
@section('title', 'teacher')
@section('content')
   <h1>{{ $teacher->name }}</h1>
    @if ($teacher->class)
        <h1>{{ $teacher->class->name }}</h1>
    @else
        -
        
    @endif    
   
    <h1>List student</h1>
    <ol>
            @foreach ($teacher->class->students as $item )
                <li>{{ $item->name }}</li>
            @endforeach
    </ol>
    <div class="container d-flex justify-content-end">
        <a class="btn btn-danger " href="/teacher">back</a>
    </div>
@endsection
