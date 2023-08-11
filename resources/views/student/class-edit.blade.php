@extends('layouts.components.MainLayout')
@section('title', 'Student || Add data')
@section('content')
    <h1>Add data student</h1>
    <form action="classedit/{{ $class->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nama</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="{{ $class->name }}">
        </div>


        <select class="form-select" name="teacher_id" aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($teacher as $item)
             <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>

        
        <input type="submit" class="btn btn-success">
    </form>
@endsection
