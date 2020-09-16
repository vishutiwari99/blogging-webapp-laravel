@extends('layouts.app')


@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Tis is the laravel application from scratch to advance</p>
    <p><a href="/login" class="btn btn-primary btn-lg">Login</a>
        <a href="/sinup" class="btn btn-success btn-lg">Sign Up</a></p>
</div>
@endsection
