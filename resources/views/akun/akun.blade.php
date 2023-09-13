@extends('layout.layout')
@section('content')
<h2>Account</h2>
<a href="/akun-create">Create Account</a>
<table>
    <tr>
        <th>#</th>
        <th>Username</th>
        <th>Name</th>
        <th>Role</th>
        <th></th>
    </tr>
    @foreach($accounts as $no=>$account)
    <tr>
        <td>{{$no+1}}</td>
        <td>{{$account->username}}</td>
        <td>{{$account->name}}</td>
        <td>{{$account->role}}</td>
        <td>
            <a href="/akun/{{$account->username}}">Show</a>
            <a href="/akun-edit/{{$account->username}}">Edit</a>
            <form action="/akun-delete/{{$account->username}}" method="post">
                @csrf
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection