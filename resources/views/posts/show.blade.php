@extends('layouts.master')

@section('content')
    <h1>{!! $post->title !!}</h1>
    
    <p>{!! $post->description !!}</p>
    
    <h3>Tags:</h3>
    <ul>
    @foreach($post->tags as $tag)
        <li>{{ $tag->name }}</li>
    @endforeach
    </ul>
    <p>{!! $post->created_at  !!}</p>
    <p>{!! $post->updated_at  !!}</p>
@stop