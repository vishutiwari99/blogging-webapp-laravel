@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
{!! Form::open(['action'=>'App\Http\Controllers\PostsController@store','method'=>'POST']) !!}
    <div class="formgroup">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class="formgroup">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'form-control', 'placeholder'=>'Body Text'])}}
    </div>
    <br>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!! Form::close() !!}
@endsection