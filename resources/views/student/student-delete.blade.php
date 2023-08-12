
@extends('layouts.components.MainLayout')
@section('title','delete')
@section('content')
<div class="py-5 my-5">
    @if (Session::has('statusdelete'))
<div class="alert alert-success" role="alert">
    {{ Session::get('status') }}  </div>
    
@endif
    <h2>Are You sure to delete data mahasiswa {{ $student->name }} </h2>
    <a class="btn btn-primary" href="/students">cancel</a>
    <form action="student-destroy/{{ $student->id }}" method="get">
        @csrf
        @method('delete')
        <button class="btn btn-danger">delete</button>
    </form>
</div>
@endsection