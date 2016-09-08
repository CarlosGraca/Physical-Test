<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('name','Name:') !!}			
			{!! Form::text('name', null, ['class'=>'form-control']) !!}		
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('email','Emial:') !!}			
			{!! Form::email('email', null, ['class'=>'form-control']) !!}		
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">	 		
		<div class="form-group form-group-sm">
			{!! Form::label('telefone','Telefone:') !!}
			{!! Form::text('telefone', null, ['class'=>'form-control']) !!}
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('telemovel','Telemovel:') !!}
			{!! Form::text('telemovel', null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('dt_test','Data Avaliação:') !!}			
			{!! Form::text('dt_test', null, ['class'=>'form-control']) !!}		
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('dt_nasc','Data Nascimento:') !!}			
			{!! Form::text('dt_nasc', null, ['class'=>'form-control']) !!}		
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">	 		
		<div class="form-group form-group-sm">
			{!! Form::label('age','Idade:') !!}
			{!! Form::text('age', null, ['class'=>'form-control','disabled']) !!}
		</div>
	</div>
	<button type="button" id="gerar_idade" class="btn btn-primary">Gerar Idade</button>
</div>

	