@extends('layouts.app')

@section('content')
<h1>Create Posts</h1>
    {!! Form::open(['action' => 'PostsController@store','method' => 'POST']) !!}
        <div class="form-group">
            {{Form::Label('title','Title')}}
            {{Form::text('title','',['class' => 'form-control','placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::Label('body','Body')}}
            {{Form::textarea('body','',['class' => 'form-control','placeholder' => 'Body text'])}}
        </div>
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection