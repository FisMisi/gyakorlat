
<div class="form-group">
     {!! Form::label('name', 'Name:', ['class'=>'col-md-4 control-label']) !!}
     <div class="col-md-6">
        {!! Form::text('name',null,['class'=>'form-control']) !!}
     </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        {!!Form::submit('mehet',['class' => 'btn btn-success form-control'])!!}
    </div>
</div>
