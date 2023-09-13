@extends('layout.layout')
@section('content')
<h2>Post</h2>
<a href="/post-create">Create Post</a>
<table>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Content</th>
        <th>Date</th>
        <th>Username</th>
        <th></th>
    </tr>
    @foreach($posts as $no=>$post)
    <tr>
        <td>{{$no+1}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>
        <td>{{$post->date}}</td>
        <td>{{$post->username}}</td>
        <td>
            <a href="/post/{{$post->idpost}}">Show</a>
            <a href="/post-edit/{{$post->idpost}}">Edit</a>
            <form action="/post-delete/{{$post->idpost}}" method="post">
                @csrf
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection