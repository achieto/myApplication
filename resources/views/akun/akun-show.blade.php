@extends('layout.layout')
@section('content')
<h2>{{$account->name}}</h2>
<a href="/akun-edit/{{$account->username}}">Edit</a>
<form action="/akun-delete/{{$account->username}}" method="post">
    @csrf
    <input type="submit" value="Delete">
</form>
<table>
    <tr>
        <th>Username</th>
        <td>{{$account->username}}</td>
    </tr>
    <tr>
        <th>Name</th>
        <td>{{$account->name}}</td>
    </tr>
    <tr>
        <th>Role</th>
        <td>{{$account->role}}</td>
    </tr>
</table>
@endsection