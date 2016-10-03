@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.settings') }}
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
 {{ trans('adminlte_lang::message.settings') }}
@endsection


@section('main-content')
    @include('layouts.shared.alert')
	<div class="row">
	    <div class="col-lg-12">
	        <div class="box box-default">
	            <div class="box-header with-border">
	                <h3 class="box-title">
	              		<span>Dados da Empresa</span>
	                </h3>
	                <div class="pull-right box-tools">
	                    @if ($settings)
		                    <a href="{{ route('settings.edit',$settings->id) }}" class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="Edit" data-remote="true">
		                       <i class="fa fa-edit"></i>
		                    </a>
	                    @else
	                    	<a href="{{ url('settings/create') }}" class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="Add" data-remote="true">
		                       <i class="fa fa-plus"></i>
		                    </a>
	                    @endif
	                    
	                </div><!-- /. tools -->						
	            </div><!-- /.box-header -->

	            <div class="box-body">               
		            <div class="row">
		        		<div class="col-lg-3 text-center">
	        		       @if(isset($settings->logo_url))
		        		    	<img  src="/uploads/{{$settings->logo_url}}" class="img-thumbnail" alt="Cinque Terre" width="300" height="150">
		        		    @else
		        		    	<img  src="/img/round-logo.jpg" class="img-thumbnail" alt="Cinque Terre" width="300" height="150">
	        		        @endif				            				            
		        		</div>
		        		<div class="col-lg-9">
		        			<ul class="list-group list-group-unbordered">
			                    <li class="list-group-item">
			                      <b>Empresa: </b><span class="name">{{$settings ? $settings->name : null}}</span> <a href="#" id='setting-name' title='Edit'> </a>
			                    </li>
			                    <li class="list-group-item">
			                      <b>Email: </b>{{$settings ? $settings->email : null}} <a href="#" id='setting-email'>  </a>
			                    </li>
			                    <li class="list-group-item">
			                      <b>NIF: </b><span class="nif">{{$settings ? $settings->nif : null}}</span> <a href="#" id='setting-nif' title='Edit'> </a>
			                    </li>
			                    <li class="list-group-item">
			                      <b>Contactos: </b>{{$settings ? $settings->telefone : null }}/{{$settings ? $settings->telemovel : null }}<a href="#" id='setting-contactos'> </a>
			                    </li>
			                    <li class="list-group-item">
			                      <b>Localização: </b>{{$settings ? $settings->localizacao : null}}
			                    </li>
			                    <li class="list-group-item">
			                      <b>Código Postal: </b> {{$settings ? $settings->cod_postal : null}}
			                    </li>
			                </ul>
		        		</div>
		        	</div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
