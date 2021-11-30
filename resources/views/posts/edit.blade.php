@extends('layouts.app')

@section('content')
<h1>Edit Posts</h1>
    {!! Form::open(['action' => ['PostsController@update',$post->id],'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::Label('title','Title')}}
            {{Form::text('title',$post->title,['class' => 'form-control','placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::Label('body','Body')}}
            {{Form::textarea('body',$post->body,['class' => 'form-control','placeholder' => 'Body text'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection