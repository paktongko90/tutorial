@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
<h1>{{$post->title}}</h1>
    <div>
        {{$post->body}}
    </div>
    <hr>written on {{$post->created_at}}
@endsection