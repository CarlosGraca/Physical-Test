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
			{!! Form::text('age', null,['class'=>'form-control']) !!}
		</div>
    </div>

	<div class="col-lg-3 col-md-4 col-sm-6">	
	    <div class="form-group form-group-sm">
	      {!! Form::label('sexo','Sexo:') !!}
	      {!! Form::select('sexo', [0=>'Escolha a Opção',1=>'Masculino',2=>'Feminino'],NULL, ['class'=>'form-control']) !!}
	    </div>
  </div>
  
</div>

<div class="row">
    <span ><strong class="title">Indice Massa Corporal</strong></span>
    <hr class="h-divider" >
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('estatura','Estatura (cm):') !!}
			{!! Form::text('estatura', null, ['class'=>'form-control']) !!}
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('peso','Peso (kg):') !!}
			{!! Form::text('peso', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('imc','IMC  kg/m²:') !!}
			{!! Form::text('imc', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('taxa_matabolica','Taxa metabóloca basal (Calorias/Dia):') !!}
			{!! Form::text('taxa_matabolica', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">		

			{!! Form::label('class','Classificação:',['id'=>'classificacao','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Classificação','data-content'=>'','data-trigger'=>'hover']) !!}

			{!! Form::text('class', null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="row">
	<span ><strong class="title">Fracionamento da Composição Corporal</strong></span>
    <hr class="h-divider" >
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('gordura','% de Gordura:') !!}
			{!! Form::text('gordura', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('peso_gordura','Peso da gordura (kg):') !!}
			{!! Form::text('peso_gordura', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('massa_magra','Massa magra (kg)') !!}
			{!! Form::text('massa_magra', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('class','Classificação:') !!}
			{!! Form::text('class', null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>
<div class="row">
	<span ><strong class="title">Medidas Circunferências</strong></span>
    <hr class="h-divider" >
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('circunferencia','Circunferência: Busto (cm):') !!}
			{!! Form::text('circunferencia', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('cintura','Cintura  (cm):') !!}
			{!! Form::text('cintura', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('quadril','Quadril  (cm):') !!}
			{!! Form::text('quadril', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('coxa','Coxa (cm):') !!}
			{!! Form::text('coxa', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('panturrilha','C. Panturrilha (cm):') !!}
			{!! Form::text('panturrilha', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('rel_cin_qua','Relação Cintura/Quadril:') !!}
			{!! Form::text('rel_cin_qua', null, ['class'=>'form-control']) !!}
		</div>
	</div>
 </div>
<div class="row">
    <span ><strong class="title">Fisico</strong></span>
    <hr class="h-divider" >	 
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('forca_abdominal','Força Abdominal (nº rep/1min):') !!}
			{!! Form::text('forca_abdominal', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('forca_mmii','Força MMII (IVC cm):') !!}
			{!! Form::text('forca_mmii', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('flexibilidade','Flexibilidade (cm):') !!}
			{!! Form::text('flexibilidade', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('forca_mmss','Força MMSS (nº de repetições):') !!}
			{!! Form::text('forca_mmss', null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>
<div class="row">
    <span ><strong class="title">Outros</strong></span>
    <hr class="h-divider" >	
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('frequesia','Frquência Cardíaca Repouso (bpm):') !!}
			{!! Form::text('frequesia', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('pressao_sis','Pressão Arterial Sistólica (mmHg):') !!}
			{!! Form::text('pressao_sis', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('pressao_dis','Pressão Arterial Diastólica (mmHg):') !!}
			{!! Form::text('pressao_dis', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('potencia_aerobica','Potência Aeróbica (ml/Kg/min):') !!}
			{!! Form::text('potencia_aerobica', null, ['class'=>'form-control']) !!}
		</div>
	</div>	
</div>

