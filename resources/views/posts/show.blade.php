@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
<h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>written on {{$post->created_at}}
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
            {{Form::open(['action' => ['PostsController@destroy',$post->id],'method' => 'POST', 'class' => 'pull-left'])}}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        @endif
    @endif
@endsection