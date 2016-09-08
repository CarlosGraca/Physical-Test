<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('name','Name:') !!}
			{!! Form::text('name', null, ['class'=>'form-control']) !!}
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('email','Email:') !!}
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
			{!! Form::date('dt_test', \Carbon\Carbon::now()->subDay(0)->format('Y-m-d'), ['class'=>'form-control']) !!}
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('dt_nasc','Data Nascimento:') !!}
			{!! Form::date('dt_nasc', null, ['class'=>'form-control']) !!}
		</div>
	</div>
  <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('age','Idade:') !!}
			{!! Form::text('age', null, ['class'=>'form-control','disabled']) !!}
		</div>
	</div>
  <div class="col-lg-3 col-md-4 col-sm-6">
    <div class="form-group form-group-sm">
      {!! Form::label('sexo','Sexo:') !!}
      {!! Form::select('sexo', [0=>'Escolha a Opção',1=>'Masculino',2=>'Feminino'],NULL, ['class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-lg-3 col-md-4 col-sm-6">
	   <button type="button" id="gerar_idade" class="btn btn-primary" style="margin-top:20px;">Gerar Idade</button>
  </div>
</div>
