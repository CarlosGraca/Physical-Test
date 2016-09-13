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
			{!! Form::label('kg','Kg:') !!}
			{!! Form::text('kg', null, ['class'=>'form-control']) !!}
		</div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('dt_nasc','Data de Nacimento:') !!}
			{!! Form::date('dt_nasc',null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('altura','Altura:') !!}
			{!! Form::text('altura', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('tipo_treino','Objectivos:') !!}
			{!! Form::text('tipo_treino', null, ['class'=>'form-control']) !!}
		</div>
	</div>	
	<div class="col-lg-3 col-md-4 col-sm-6">
	    <div class="form-group form-group-sm">
	      {!! Form::label('aluno','Aluno:') !!}
	      {!! Form::select('aluno', [0=>'Escolha a Opção',1=>'Iniciante',2=>'Intermédio',3=>'Avançado'],NULL, ['class'=>'form-control']) !!}
	    </div>
	</div>
    <div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('dia_treino','Dias de treino:') !!}
			{!! Form::text('dia_treino', null, ['class'=>'form-control']) !!}
		</div>
	</div>
	<div class="col-lg-3 col-md-4 col-sm-6">
		<div class="form-group form-group-sm">
			{!! Form::label('dt_start','Data Inicio:') !!}
			{!! Form::date('dt_start', \Carbon\Carbon::now()->subDay(0)->format('Y-m-d'), ['class'=>'form-control']) !!}
		</div>
	</div>
</div>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active">
             <a href="#biceps-antebraco" data-toggle="tab">Biceps e Antebraço</a>
        </li>
        <li>
            <a href="#triceps" data-toggle="tab">Triceps</a>
        </li>
        <li>
            <a href="#ombro-trapesio" data-toggle="tab">Ombros e Trapésio</a>
        </li>
        <li>
             <a href="#peitoral" data-toggle="tab">Peitoral</a>
        </li>
        <li>
            <a href="#costas" data-toggle="tab">Costas</a>
        </li>
        <li>
            <a href="#quadril-perna-coxa" data-toggle="tab">Quadril, Coxa e Perna</a>
        </li>
        <li>
             <a href="#abdmen" data-toggle="tab">Abdomen</a>
        </li>        
    </ul>
    <div class="tab-content">
        <!-- Biceps e Antebraço -->
        <div class="tab-pane active" id="biceps-antebraco">
            <table class="table table-bordered" id="table-biceps-antebraco">
                <thead>
                    <tr>
                        <th>Ordem</th>
                        <th>Exercicio</th>
                        <th>Séries</th>
                        <th>Repet.</th>
                        <th>Máq.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1.</th>
                        <th>Biceps máquina</th>
                        <th>12</th>
                        <th>3</th>
                        <th>40</th>
                    </tr>  
                    <tr>
                        <th>1.</th>
                        <th>Biceps máquina</th>
                        <th>12</th>
                        <th>3</th>
                        <th>40</th>
                    </tr>  
                </tbody>                                     
            </table>
        </div>
        <!-- Triceps -->
        <div class="tab-pane" id="triceps">
        </div>
        <!-- Ombros e Trapésio -->
        <div class="tab-pane" id="ombro-trapesio">
        </div>
        <!-- Ombros e Trapésio -->
        <div class="tab-pane" id="peitoral">
        </div>
        <!-- Costas -->
        <div class="tab-pane" id="costas">
        </div>
        <!-- Quadril, Coxa e Perna -->
        <div class="tab-pane" id="quadril-perna-coxa">
        </div>
        <!-- Abdmem -->
        <div class="tab-pane" id="abdmen">
        </div>
    </div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="form-group">
			{!! Form::label('note','Note:') !!}
			{!! Form::textarea('note', null, ['class'=>'form-control','rows'=>'3','style'=>'width: 100%;'])  !!}
		</div> 
	</div>	
</div>