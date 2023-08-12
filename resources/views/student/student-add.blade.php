@extends('layouts.components.MainLayout')
@section('title', 'Student || Add data')
@section('content')
    <h1>Add data student</h1>
    <form action="studentsubmit" method="POST">
        @csrf
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

            

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NIS</label>
            <input type="number" class="form-control" id="exampleFormControlInput1" name="nis" placeholder="NIS">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">nama</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="name">
        </div>
        <div class="mb-3">
            <input type="radio" name="gender" id="gender" value="male">laki-laki
            <input type="radio" name="gender" id="gender" value="female">perempuan
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
