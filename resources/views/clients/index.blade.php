@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.clients') }}
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
  {{ trans('adminlte_lang::message.clients') }}
@endsection


@section('main-content')
	<div class="row">
	    <div class="col-lg-12">
	        <div class="box box-default">
	            <div class="box-header with-border">
	              <h3 class="box-title"></h3>
	              <div class="pull-left box-tools">
	                  <a href="{{ url('clients/create') }}" class="btn btn-success btn-sm" role="button" data-toggle="tooltip" title="{{ trans('adminlte_lang::message.new_test') }}">
	                       <i class="fa fa-plus"></i>
	                  </a>

	              </div><!-- /. tools -->
	            </div><!-- /.box-header -->

	            <div class="box-body">
	                <table id="table-tests" class="table table-bordered table-striped">
		                <thead>
		                  <tr>
		                    <th style="width: 10px" class="col-md-1">#</th>
		                    <th class="col-md-3">Name</th>
		                    <th class="col-md-2">Email</th>
		                    <th class="col-md-2">Contato</th>
												<th class="col-md-1">Sexo</th>
		                    <th class="col-md-2">Morada</th>
		                    <th class="col-md-2"></th>
		                  </tr>
		                </thead>
		                <tbody>
										  @foreach ($clients as $client)
												<tr>
													<td>{{$client->id}}</td>
													<td>{{$client->name}}</td>
													<td>{{$client->email}}</td>
													<td>{{$client->telemovel }}/{{$client->telefone }}</td>
													<td>{{ $client->sexo == 1 ? 'Masculino' : 'Feminino' }}</td>
													<td>{{ $client->morada }}</td>
													<td>
															<button type="button" class="btn btn-xs btn-warning btn-flat" data-toggle="modal" data-target="#confirmDelete" data-toggle="tooltip" title="Delete" data-product_id="{{ $client->id }}" data-product_name="{{ $client->id }}">
																<i class="fa fa-trash"></i>
															</button>
															<a href="{{ route('clients.edit',$client->id) }}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Editar" data-remote='false'])>   <i class="fa fa-edit"></i>
																</a>
															<!--
																<a href="{{ url('tests/pdf/') }}/{{$client->id}}" target="_blank" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Pdf" ])>   <i class="fa fa-file-pdf-o"></i>
																</a>

															<a href="{{ route('tests.edit',$client->id) }}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Email" data-remote='true'])>   <i class="fa fa-send"></i>
															</a>
																-->
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
