@extends('layout.layout')
@section('content')
<h2>Create Post</h2>
<form action="/post-create" method="post">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content" required></textarea>
    </div>
    <input type="submit" value="Save">
</form>
@endsection