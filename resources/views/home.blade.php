@extends('layout.layout')
@section('content')
@foreach($posts as $post)
<div>
    <h2>{{$post->title}}</h2>
    <small>{{$post->username}} {{$post->date}}</small>
    <div>{{$post->content}}</div>
</div>
@endforeach
@endsection