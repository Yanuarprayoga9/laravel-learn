@extends('layouts.components.MainLayout')
@section('title', 'Student || Add data')
@section('content')
    <h1>Add data student</h1>
    <form action="editstudent/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIS</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="nis"  value="{{ $student->nis }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nama</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="{{ $student->name }}">
        </div>
        <div class="mb-3">
            <input type="radio"  name="gender" id="gender" value="male" >laki-laki
            <input type="radio"  name="gender" id="gender" value="female">perempuan
        </div>


        <select class="form-select" name="class_id" aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($class as $item)
             <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>

        
        <input type="submit" class="btn btn-success">
    </form>
@endsection
