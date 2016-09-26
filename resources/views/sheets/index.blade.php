@extends('layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.evaluation_sheet') }}
@endsection

@section('contentheader_title')
  {{ trans('adminlte_lang::message.app_name') }}
@endsection

@section('contentheader_description')
  {{ trans('adminlte_lang::message.evaluation_sheet') }}
@endsection


@section('main-content')
	<div class="row">
	    <div class="col-lg-12 col-xs-6">
	        <div class="box box-default">
	            <div class="box-header with-border">
	              <h3 class="box-title"></h3>
	              <div class="pull-left box-tools">
	                  <a href="{{ url('sheets/create') }}"  class="btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="{{ trans('adminlte_lang::message.new_sheet') }}">
	                       <i class="fa fa-plus"></i>
	                  </a>
	                  
	              </div><!-- /. tools -->
	            </div><!-- /.box-header -->
	  
	            <div class="box-body">
	                <table id="table-sheets" class="table table-bordered table-striped">
		                <thead>
		                  <tr>
		                    <th style="width: 10px">#</th>
		                    <th>Aluno</th>
		                    <th>Email</th>
		                    <th>Contato</th>
		                    <th>Data Criação</th>
		                    <th></th>
		                  </tr>
		                </thead>
		                <tbody>
		                    @foreach ($sheets as $sheet)
  								<tr>
  									<td>{{$sheet->id}}</td>
  									<td>{{$sheet->client->name}}</td>
  									<td>{{$sheet->client->email}}</td>
  									<td>{{$sheet->client->telemovel }}/{{$sheet->client->telefone }}</td>
  									<td>
										{{ $sheet->created_at }}
  									</td>
  									<td> 							                          
                                        <button type="button" class="btn btn-xs btn-warning btn-flat" data-toggle="modal" data-target="#confirmDelete" data-toggle="tooltip" title="Delete"data-product_id="{{ $sheet->id }}" data-product_name="{{ $sheet->id }}">
				                            <i class="fa fa-trash"></i>
				                        </button> 
				                        <a href="{{ route('sheets.edit',$sheet->id) }}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Editar" data-remote='true'])>   <i class="fa fa-edit"></i>
                                        </a> 

				                        <a href="{{ url('pdf/handout/') }}/{{$sheet->id}}" target="_blank" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Pdf" ])>   <i class="fa fa-file-pdf-o"></i>
                                        </a>
                                        <a href="{{ route('sheets.edit',$sheet->id) }}" class="btn btn-primary btn-xs", data-toggle="tooltip" title="Email" data-remote='true'])>   <i class="fa fa-send"></i>
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
