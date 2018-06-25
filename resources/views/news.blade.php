@extends('layouts.lara')

@section('title', 'Home page')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h1>Новости</h1>
    @foreach ($news as $oneNews)
        <div>
            <img src="{{$oneNews['preview']}}"/>
            <h2>{{$oneNews['title']}}</h2>
            <p>{{$oneNews['content']}}</p>
        </div>
    @endforeach
@endsection