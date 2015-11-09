
<div class="form-group">
     {!! Form::label('title', 'Title:', ['class'=>'col-md-4 control-label']) !!}
     <div class="col-md-6">
        {!! Form::text('title',null,['class'=>'form-control']) !!}
     </div>
</div>

<div class="form-group">
    {!! Form::label('email','Email:',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description','Description:',['class'=>'col-md-4 control-label'])!!}
    <div class="col-md-6">
        {!!Form::textarea('description',null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('live','Date:',['class'=>'col-md-4 control-label'])!!}
    <div class="col-md-6">
        {!!Form::input('date','live',null,['class'=>'form-control'])!!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('tags','Tags',['class'=>'col-md-4 control-label'])!!}
    <div class="col-md-6">
        {!!Form::select('tags[]',$tags,(isset($post))? $post->tagList() : null, ['id' =>'tags', 'class'=>'form-control','multiple'])!!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        {!!Form::submit('mehet',['class' => 'btn btn-success form-control'])!!}
    </div>
</div>

@section('footer')
<script>
    $('#tags').select2();
</script>
@endsection
