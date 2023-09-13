@extends('layout.layout')
@section('content')
<h2>{{$post->name}}</h2>
<a href="/post-edit/{{$post->idpost}}">Edit</a>
<form action="/post-delete/{{$post->idpost}}" method="post">
    @csrf
    <input type="submit" value="Delete">
</form>
<table>
    <tr>
        <th>Title</th>
        <td>{{$post->title}}</td>
    </tr>
    <tr>
        <th>Content</th>
        <td>{{$post->content}}</td>
    </tr>
    <tr>
        <th>Date</th>
        <td>{{$post->date}}</td>
    </tr>
    <tr>
        <th>Username</th>
        <td>{{$post->username}}</td>
    </tr>
</table>
@endsection