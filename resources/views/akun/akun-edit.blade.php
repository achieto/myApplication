@extends('layout.layout')
@section('content')
<h2>Create Account</h2>
<form action="/akun-edit/{{$account->username}}" method="post">
    @csrf
    <div>
        <label for="username">Username</label>
        <input type="text" value="{{$account->username}}" disabled>
        <input type="hidden" name="username" id="username" value="{{$account->username}}" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="text" name="password" id="password" required>
    </div>
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$account->name}}" required>
    </div>
    <div>
        <label for="role">Role</label>
        <select name="role" id="role" required>
            <option value="admin" {{$account->role=='admin' ? 'selected' : ''}}>Admin</option>
            <option value="author" {{$account->role=='author' ? 'selected' : ''}}>Author</option>
        </select>
    </div>
    <input type="submit" value="Save">
</form>
@endsection