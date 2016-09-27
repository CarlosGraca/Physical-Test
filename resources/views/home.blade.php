@extends('layouts.app')

@section('htmlheader_title')
	home
@endsection

@section('contentheader_title')
  Physical Test
@endsection

@section('contentheader_description')
  Control panel
@endsection


@section('main-content')
	<div class="row">
	    <div class="col-lg-6 col-sm-12 col-xs-12">
	        <div class="box box-default">

	            <div class="box-body">
	                  <!-- Small boxes (Stat box) -->
		          <div class="row">
		            <div class="col-md-6 col-sm-6 col-xs-12">
		              <!-- small box -->
		              <div class="small-box bg-aqua">
		                <div class="inner">
		                  <h3>{{$total_tests}}</h3>
		                  <p>Avalição Fisica</p>
		                </div>
		                <div class="icon">
		                  <i class="ion ion-medkit"></i>
		                </div>
		                <a href="{{ url('tests') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		              </div>
		            </div><!-- ./col -->
		            <div class="col-md-6 col-sm-6 col-xs-12">
		              <!-- small box -->
		              <div class="small-box bg-green">
		                <div class="inner">
		                  <h3>{{$total_sheets}}</h3>
		                  <p>Ficha de Treino</p>
		                </div>
		                <div class="icon">
		                  <i class="ion ion-stats-bars"></i>
		                </div>
		                <a href="{{ url('sheets') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		              </div>
		            </div><!-- ./col -->
	            </div>
	        </div>
	    </div>
		</div>
		<div class="col-md-6 col-sm-12 col-xs-12">
				<!-- BAR CHART -->
				<div class="box box-success">
					<div class="box-header with-border">
						<i class="fa fa-bar-chart"></i>
						<h3 class="box-title">Bar Chart</h3>

						<div class="box-tools">
							<button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
								<i class="fa fa-calendar"></i></button>
								<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="chart">
							<canvas id="barChart" style="height:230px"></canvas>
						</div>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
		</div>
	</div>
@endsection
