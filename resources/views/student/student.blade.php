@extends('layouts.components.MainLayout')
@section('title','Home')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>Nis</th>
            <th>gender</th>
            <th>Kelas id</th>
            <th>Kelas</th>
            <th>Extra</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($studentList as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['nis'] }}</td>
            <td>{{ $item['gender'] }}</td>
            <td>{{ $item['class_id'] }}</td>
            <td>{{ $item->class['name'] }}</td>
            <td>
                 @foreach ($item->extracurriculars as $extracurricular)
                    {{ $extracurricular->name }} <br>
                @endforeach    
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection