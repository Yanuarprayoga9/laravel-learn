@extends('layouts.components.MainLayout')
@section('title', 'Student || Add data')
@section('content')
    <h1>Add data student</h1>
    <form action="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIS</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="name">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nama</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name">
        </div>
        <div class="mb-3">
            <input type="radio"  name="gender" id="gender" value="male">laki-laki
            <input type="radio"  name="gender" id="gender" value="female">perempuan
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
    </form>
@endsection
