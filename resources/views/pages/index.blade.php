@extends('layouts.app')


@section('content')
<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>This is the Simple Blogging App where you can post your thought and can post images also...</p>
    <p><a href="/login" class="btn btn-primary btn-lg">Login</a>
        <a href="/register" class="btn btn-success btn-lg">Sign Up</a></p>
</div>
@endsection
