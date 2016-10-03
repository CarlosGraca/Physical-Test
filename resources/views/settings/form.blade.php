<div class="row">	
    <div class="col-md-3">

    	@if (isset($setting))
	       @if(($setting->logo_url))
		    	<img  src="/uploads/{{$setting->logo_url}}" class="img-thumbnail" alt="Cinque Terre" width="300" height="150">
		    	{!! Form::hidden('logo', $setting->logo_url , ['class'=>'form-control']) !!}
		    @else
		    	<img  src="/img/round-logo.jpg" class="img-thumbnail" alt="Cinque Terre" width="300" height="150">
	        @endif
	    @else
		   <img  src="/img/round-logo.jpg" class="img-thumbnail" alt="Cinque Terre" width="300" height="150">		        		        
	    @endif
	    <div class="form-group" style="margin-top: 10px;" >
            {{ Form::file('logo_url', null, ['class' =>  'filestyle', 'data-input'=>'false', 'data-buttonText'=>'Select Image'])}}
        </div>
    </div>
    <div class="col-md-9">
	    <div class="col-sm-6">
			<div class="form-group form-group-sm">
				{!! Form::label('name','Name:') !!}
				{!! Form::text('name', null , ['class'=>'form-control']) !!}
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group form-group-sm">
				{!! Form::label('nif','NIF:') !!}
				{!! Form::text('nif', null , ['class'=>'form-control']) !!}
			</div>
		</div>
	    <div class="col-sm-6">
			<div class="form-group form-group-sm">
				{!! Form::label('email','Email:') !!}
				{!! Form::email('email', null, ['class'=>'form-control']) !!}
			</div>
		</div>
		
	    <div class="col-sm-6">
			<div class="form-group form-group-sm">
				{!! Form::label('telefone','Telefone:') !!}
				{!! Form::text('telefone', null , ['class'=>'form-control']) !!}
			</div>
		</div>

		<div class="col-sm-6">
			<div class="form-group form-group-sm">
				{!! Form::label('telemovel','Telemovel:') !!}
				{!! Form::text('telemovel', null , ['class'=>'form-control']) !!}
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group form-group-sm">
				{!! Form::label('localizacao','Localização:') !!}
				{!! Form::text('localizacao', null , ['class'=>'form-control']) !!}
			</div>
		</div>
		<div class=" col-sm-6">
			<div class="form-group form-group-sm">
				{!! Form::label('cod_postal','Código Postal:') !!}
				{!! Form::text('cod_postal', null , ['class'=>'form-control']) !!}
			</div>
		</div>
	</div>	
</div>
<div class="row" >	
	<div class="col-xs-12" >      
	    {!! Form::submit($submitButtonText,['class'=>'btn btn-primary pull-right']) !!}      
	</div>
</div>
