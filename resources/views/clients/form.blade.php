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
	{!! Form::hidden('client_id', ($type == 'update' ? $client->id : null), ['class'=>'form-control','id'=>'client_id']) !!}
    <span ><strong class="title">Dados Pessoais</strong></span>
    <hr class="h-divider" >
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('name','Name:') !!}
			{!! Form::text('name', ($type == 'update' ? $client->name : null) , ['class'=>'form-control','onfocus'=>'onfocus']) !!}
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('email','Email:') !!}
			{!! Form::email('email', ($type == 'update' ? $client->email : null) , ['class'=>'form-control']) !!}
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('telefone','Telefone:') !!}
			{!! Form::text('telefone', ($type == 'update' ? $client->telefone : null) , ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('telemovel','Telemovel:') !!}
			{!! Form::text('telemovel', ($type == 'update' ? $client->telemovel : null) , ['class'=>'form-control']) !!}
		</div>
	</div>

</div>
<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-6">
			<div class="form-group form-group-sm">
				{!! Form::label('dt_nasc','Data Nascimento:') !!}
				{!! Form::date('dt_nasc', ($type == 'update' ? $client->dt_nasc : null) , ['class'=>'form-control']) !!}
			</div>
		</div>
		@if($type=='tests')
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="form-group form-group-sm">
					{!! Form::label('age','Idade:') !!}
					{!! Form::number('age', null,['class'=>'form-control','readOnly'=>true]) !!}
				</div>
			</div>
		@endif
		<div class="col-lg-3 col-md-4 col-sm-6">
		    <div class="form-group form-group-sm">
		      {!! Form::label('sexo','Sexo:') !!}
		      {!! Form::select('sexo', [0=>'Escolha a Opção',1=>'Masculino',2=>'Feminino'],($type == 'update' ? $client->sexo : null), ['class'=>'form-control']) !!}
		    </div>
	  </div>

		<div class="col-lg-3 col-md-4 col-sm-6">
			<div class="form-group form-group-sm">
				{!! Form::label('morada','Morada:') !!}
				{!! Form::text('morada', ($type == 'update' ? $client->morada : null) , ['class'=>'form-control']) !!}
			</div>
		</div>
		@if($type=='tests')
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="form-group form-group-sm">
					{!! Form::label('dt_test','Data Avaliação:') !!}
					{!! Form::date('dt_test', \Carbon\Carbon::now()->subDay(0)->format('Y-m-d'), ['class'=>'form-control']) !!}
				</div>
			</div>
		@endif
</div>
