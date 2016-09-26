@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.list_test') }}
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
  {{ trans('adminlte_lang::message.list_test') }}
@endsection


@section('main-content')
	<div class="row">
	    <div class="col-lg-12">
	        <div class="box box-default">
	            <div class="box-header with-border">
	              <h3 class="box-title"></h3>
	              <div class="pull-left box-tools">
	                  <a href="{{ url('tests/create') }}" class="btn btn-success btn-sm" role="button" data-toggle="tooltip" title="{{ trans('adminlte_lang::message.new_test') }}">
	                       <i class="fa fa-plus"></i>
	                  </a>

	              </div><!-- /. tools -->
	            </div><!-- /.box-header -->

	            <div class="box-body">
	                <table id="table-tests" class="table table-bordered table-striped">
		                <thead>
		                  <tr>
		                    <th style="width: 10px" class="col-md-1">#</th>
		                    <th class="col-md-3">Aluno</th>
		                    <th class="col-md-2">Email</th>
		                    <th class="col-md-2">Contato</th>
		                    <th class="col-md-2">Data Avaliação</th>
		                    <th class="col-md-2"></th>
		                  </tr>
		                </thead>
		                <tbody>
										  @foreach ($tests as $test)
												<tr>
													<td>{{$test->id}}</td>
													<td>{{$test->client->name}}</td>
													<td>{{$test->client->email}}</td>
													<td>{{$test->client->telemovel }}/{{$test->client->telefone }}</td>
													<td>{{ $test->dt_test }}</td>
													<td>
															<button type="button" class="btn btn-xs btn-warning btn-flat" data-toggle="modal" data-target="#confirmDelete" data-toggle="tooltip" title="Delete" data-product_id="{{ $test->id }}" data-product_name="{{ $test->id }}">
																<i class="fa fa-trash"></i>
															</button>
															<a href="{{ route('tests.edit',$test->id) }}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Editar" data-remote='true'])>   <i class="fa fa-edit"></i>
																</a>
															<a href="{{ url('pdf/handout/') }}/{{$test->id}}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Pdf" data-remote='true'])>   <i class="fa fa-file-pdf-o"></i>
																	</a>
															<a href="{{ route('tests.edit',$test->id) }}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Email" data-remote='true'])>   <i class="fa fa-send"></i>
																	</a>
													</td>
												</tr>
											@endforeach

		                <tbody>
                    </table>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
