@extends('layout.layout')
@section('content')
<h2>Edit Post</h2>
<form action="/post-edit/{{$post->idpost}}" method="post">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}" required>
    </div>
    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content" required>{{$post->content}}</textarea>
    </div>
    <input type="submit" value="Save">
</form>
@endsection