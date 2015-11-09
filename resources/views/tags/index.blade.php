@extends('layouts.master')

@section('content')
    <h1>Tags</h1>
    
    @if(count($tags))
        @foreach($tags as $tag)
            <h2><a href="{{action('TagController@show', [$tag->id])}}">{!! $tag->name !!}</a></h2>
 
        @endforeach
    @endif
@stop
