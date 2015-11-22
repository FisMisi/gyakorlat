@extends('layouts.master')
@section('content')
    <div class="container-fluid">
	<div class="row">
            <div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
                    <div class="panel-heading">Content</div>
                    <div class="panel-body">
                        @include('partials.errors')
                        {!! Form::open(['url' => 'articles']) !!}
                            @include('posts.form')
                        {!! Form::close() !!}
                    </div>
               </div>
            </div>
        </div>
    </div>
@stop   