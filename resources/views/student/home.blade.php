@extends('layouts.components.MainLayout')
@section('title','Home')
@section('content')
<h1>ini adalah page home</h1>

@if(Auth::check())
    Welcome, {{ Auth::user()->name }}!
    Your Role: {{ Auth::user()->role->name }}
@endif
@endsection