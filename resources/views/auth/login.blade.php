@extends('layout.layout')
@section('content')
<form action="/login" method="post">
  @csrf
  <div>
    <label for="username" class="form-label"><B>Username</B></label>
    <input type="text" name="username" id="username" required autocomplete="off">
  </div>

  <div>
    <label for="password" class="form-label"><B>Password</B></label>
    <input type="password" name="password" id="password" required autocomplete="off">
  </div>

  <div>
    <button type="submit">Login</button>
  </div>
</form>
@endsection