@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.new_sheet') }}
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
  {{ trans('adminlte_lang::message.new_sheet') }}
@endsection


@section('main-content')
	<div class="row">
	    <div class="col-lg-12 col-xs-6">
	        <div class="box box-default">
	            <div class="box-header with-border">
	                <h3 class="box-title">
	              	    <strong>{{ trans('adminlte_lang::message.evaluator') }}: 
	              	    </strong>
	              	    <span>{{ Auth::user()->name }}</span> 
	                </h3>
	                <div class="pull-right box-tools">
	                    <a href="#" data-remote="true" class="btn btn-primary btn-sm" role="button"    data-toggle="tooltip" title="Pdf">
	                       <i class="fa fa-file-pdf-o"></i>
	                    </a>
	                    <a href="#" data-remote="true" class="btn btn-primary btn-sm" role="button"    data-toggle="tooltip" title="Email">
	                       <i class="fa fa-send"></i>
	                    </a>
	                    <a href="#" data-remote="true" class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="Save">
	                       <i class="fa fa-save"></i>
	                    </a>	                  
	                </div><!-- /. tools -->
	            </div><!-- /.box-header -->
	  
	            <div class="box-body">
	                 @include('sheets.form')	                
		        </div>
	        </div>
	    </div>
	</div> 
@endsection