@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.new_test') }}
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
  {{ trans('adminlte_lang::message.new_test') }}
@endsection


@section('main-content')
   
	<div class="row">
	    <div class="col-lg-12">
	        <div class="box box-default">
	            <div class="box-header with-border">
	              <h3 class="box-title">
	              	 <strong>{{ trans('adminlte_lang::message.evaluator') }}: </strong><span>{{ Auth::user()->name }}</span>
	              </h3>
<<<<<<< HEAD
	              <div class="pull-right box-tools">
	                   <a href="#" class="btn btn-primary btn-sm" role="button"    data-toggle="tooltip" title="Pdf">
	                       <i class="fa fa-file-pdf-o"></i>
	                    </a>
	                   <a href="#"  class="btn btn-primary btn-sm" role="button"    data-toggle="tooltip" title="Email">
	                       <i class="fa fa-send"></i>
	                    </a>
	                    <a href="#"  class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="Save">
	                       <i class="fa fa-save"></i>
	                     </a>	                  
	              </div><!-- /. tools -->
=======
>>>>>>> 44f85546d6a2fe157dddfa22600f39b9898666a6
								<div class="pull-right box-tools">
										<a href="{{ url('tests') }}" class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="Voltar">
											 <i class="fa  fa-arrow-left"></i>
										</a>

										<a href="#" class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="Save" id="add-test">
											 <i class="fa fa-save"></i>
										</a>
								</div><!-- /. tools -->
	            </div><!-- /.box-header -->

	            <div class="box-body">
	                 @include('tests.form', array(''=>''))
	            </div>
	        </div>
	    </div>
	</div>
@endsection
