@extends('layouts.login')

@section('title')
    Login
@endsection

@section('font')
<style type="text/css">
    @font-face {
        font-family: inter;
        src: url(Inter-VariableFont_slnt,wght.ttf);
    }
</style>
@endsection

@section('styling')
<link rel="stylesheet" href="{{url ('loginn/style.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="form">
        <p>Hi, There.</p>
        <h2>Welcome back to our system</h2>
        <div class="username"><label for="username">Username</label></div>
        <div> <input type="text"></div>
        <div class="password"><label for="password">password</label></div>
        <div><input type="password"></div>
        <a href="landing-pages"><button><h1>Login</h1></button></a>
    </div>
    <div class="background">
        <div class="gambar"></div>
    </div>
</div>
@endsection