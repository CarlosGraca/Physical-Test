<style type="text/css">
	.h-divider{
		 margin-top:5px;
		 margin-bottom:5px;
		 height:1px;
		 border-top:3px solid #3C8DBC;
		 size: 30;
		 margin-left: 15px;
		 margin-right: 15px;
    }
    .title{
    	padding-top:15x;
    	margin-left: 15px;
        text-transform: uppercase;
    }
</style>
<div class="row">
	{!! Form::hidden('client_id', null, ['class'=>'form-control','id'=>'client_id']) !!}
    <span ><strong class="title">Dados Pessoais</strong></span>
    <hr class="h-divider" >
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
				{!! Form::label('dt_nasc','Data Nascimento:') !!}
				{!! Form::date('dt_nasc', null, ['class'=>'form-control']) !!}
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-sm-6">
		    <div class="form-group form-group-sm">
		      {!! Form::label('sexo','Sexo:') !!}
		      {!! Form::select('sexo', [0=>'Escolha a Opção',1=>'Masculino',2=>'Feminino'],NULL, ['class'=>'form-control']) !!}
		    </div>
	  </div>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="form-group form-group-sm">
				{!! Form::label('morada','Morada:') !!}
				{!! Form::text('morada', null, ['class'=>'form-control']) !!}
			</div>
		</div>

</div>
