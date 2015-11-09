@extends('layouts.master')

@section('content')
    <h1>{!! $tag->name !!}</h1>
    
    <p>{!! $tag->created_at  !!}</p>
    <p>{!! $tag->updated_at  !!}</p>
@stop