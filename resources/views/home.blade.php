@extends('layouts.lara')

@section('title', 'Home page')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    @foreach ($basket as $fruit)
        <b>{{$fruit}}</b>,
    @endforeach
@endsection