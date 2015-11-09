@extends('layouts.master')

@section('sidebar')

@section('title')
   {{ $title }}
@stop

@section('content')
    <p>{{$content}}</p>
@stop