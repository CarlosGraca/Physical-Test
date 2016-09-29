<div class="form-group form-group-sm">
  {!! Form::label('name','Name:') !!}
  {!! Form::text('name', ($type == 'update' ? $client->name : null) , ['class'=>'form-control']) !!}
</div>
