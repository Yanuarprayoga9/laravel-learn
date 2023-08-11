@extends('layouts.components.MainLayout')
@section('title', 'Student || Add data')
@section('content')
    <h1>Add data Kelas</h1>
    <form action="classsubmit" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nama</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="name">
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
