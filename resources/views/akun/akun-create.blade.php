@extends('layout.layout')
@section('content')
<h2>Create Account</h2>
<form action="/akun-create" method="post">
    @csrf
    <div>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="role">Role</label>
        <select name="role" id="role" required>
            <option value="admin">Admin</option>
            <option value="author">Author</option>
        </select>
    </div>
    <input type="submit" value="Save">
</form>
@endsection