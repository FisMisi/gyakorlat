@extends('layouts.master')

@section('content')
    <h1>Posts</h1>
    
    @if(count($posts))
        @foreach($posts as $post)
            <h2><a href="{{action('PostController@show', [$post->id])}}">{!! $post->title !!}</a></h2>
        
            <p>{!! $post->description !!}</p>
            
        @endforeach
    @endif
@stop
