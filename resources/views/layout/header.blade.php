<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <a href="/">Beranda</a>
    <a href="/post">Post</a>
    <a href="/akun">Akun</a>
    @if(isset(auth()->user()->role))
    <a href="/logout">Logout({{auth()->user()->username}})</a>
    @else
    <a href="/login">Login</a>
    @endif