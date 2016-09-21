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
			{!! Form::label('peso','Peso (kg):',['id'=>'h_peso','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('peso', null, ['class'=>'form-control']) !!}
		</div>
	</div>


	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('imc','IMC  kg/m²:',['id'=>'h_imc','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('imc', null, ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-3 col-md-4 col-sm-6 dc_tricepts" style="display:none;">
		<div class="form-group form-group-sm">
			{!! Form::label('dc_tricepts','DC Tríceps (mm):',['id'=>'h_dc_tricepts','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('dc_tricepts', null, ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-3 col-md-4 col-sm-6 soma_dc_triceps_subescapular" style="display:none;">
		<div class="form-group form-group-sm">
				{!! Form::label('soma_dc_triceps_subescapular','Soma DC Tríceps + Subescapular (mm):',['id'=>'h_soma_dc_triceps_subescapular','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('soma_dc_triceps_subescapular', null, ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-3 col-md-4 col-sm-6 soma5_dc" style="display:none;">
		<div class="form-group form-group-sm">
				{!! Form::label('soma5_dc','Soma 5 DC (mm):',['id'=>'h_soma5_dc','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('soma5_dc', null, ['class'=>'form-control']) !!}
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
	<span ><strong class="title">Medidas Circunferências</strong></span>
    <hr class="h-divider" >
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('circunferencia','Circunferência: Busto (cm):',['id'=>'h_circunferencia','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('circunferencia', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('cintura','Cintura  (cm):',['id'=>'h_cintura','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('cintura', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('quadril','Quadril  (cm):',['id'=>'h_quadril','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
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
			{!! Form::label('rel_cin_qua','Relação Cintura/Quadril:',['id'=>'h_rel_cin_qua','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('rel_cin_qua', null, ['class'=>'form-control']) !!}
		</div>
	</div>
 </div>

<div class="row">
	<span ><strong class="title">Fracionamento da Composição Corporal</strong></span>
    <hr class="h-divider" >
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('gordura','% de Gordura:',['id'=>'h_gordura','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
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
			{!! Form::label('massa_magra','Peso da massa magra (kg)') !!}
			{!! Form::text('massa_magra', null, ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-3 col-md-4 col-sm-6 peso_corporal_total" style="display:none;">
		<div class="form-group form-group-sm">
			{!! Form::label('peso_corporal_total','Peso Corporal Total (kg)') !!}
			{!! Form::text('peso_corporal_total', null, ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-3 col-md-4 col-sm-6 peso_a_perder" style="display:none;">
		<div class="form-group form-group-sm">
			{!! Form::label('peso_a_perder','Peso a Perder (kg)') !!}
			{!! Form::text('peso_a_perder', null, ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-3 col-md-4 col-sm-6 total_agua_corpo" style="display:none;">
		<div class="form-group form-group-sm">
			{!! Form::label('total_agua_corpo','Total de água do corpo (litros)') !!}
			{!! Form::text('total_agua_corpo', null, ['class'=>'form-control']) !!}
		</div>
	</div>

	<div class="col-lg-3 col-md-4 col-sm-6 perc_agua_massa_magra" style="display:none;">
		<div class="form-group form-group-sm">
			{!! Form::label('perc_agua_massa_magra','% de água da massa magra (litros)',['id'=>'h_perc_agua_massa_magra','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('perc_agua_massa_magra', null, ['class'=>'form-control']) !!}
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
			{!! Form::label('class','Classificação:',['id'=>'h_class','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('class', null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>

<div class="row">
    <span ><strong class="title">Fisico</strong></span>
    <hr class="h-divider" >
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('forca_abdominal','Força Abdominal (nº rep/1min):',['id'=>'h_forca_abdominal','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('forca_abdominal', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('forca_mmii','Força MMII (IVC cm):',['id'=>'h_forca_mmii','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('forca_mmii', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('flexibilidade','Flexibilidade (cm):',['id'=>'h_flexibilidade','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('flexibilidade', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('forca_mmss','Força MMSS (nº de repetições):',['id'=>'h_forca_mmss','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('forca_mmss', null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>
<div class="row">
    <span ><strong class="title">Outros</strong></span>
    <hr class="h-divider" >
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('frequencia_card_rep','Frequência Cardíaca Repouso (bpm):',['id'=>'h_frequencia_card_rep','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('frequencia_card_rep', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('pressao_sis','Pressão Arterial Sistólica (mmHg):',['id'=>'h_pressao_sis','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('pressao_sis', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('pressao_dis','Pressão Arterial Diastólica (mmHg):',['id'=>'h_pressao_dis','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('pressao_dis', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('potencia_aerobica','Potência Aeróbica (ml/Kg/min):',['id'=>'h_potencia_aerobica','tabindex'=>'0','data-placement'=>'top','data-toggle'=>'popover','title'=>'Padrão de Saúde','data-content'=>'','data-trigger'=>'hover']) !!}
			{!! Form::text('potencia_aerobica', null, ['class'=>'form-control']) !!}
		</div>
	</div>
</div>
