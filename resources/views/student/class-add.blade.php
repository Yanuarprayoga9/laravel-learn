@extends('layouts.components.MainLayout')
@section('title', 'Student || Add data')
@section('content')
    <h1>Add data Kelas</h1>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div> 
    @endif
    <form action="classsubmit" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nama</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="name">
        </div>
        <select class="form-select" name="teacher_id" aria-label="Default select example">
            <option selected>Walikelas</option>
            @foreach ($teacher as $item)
             <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
          </select>
        <input type="submit" class="btn btn-success mt-3">
    </form>
@endsection
