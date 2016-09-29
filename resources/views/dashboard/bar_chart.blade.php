<!-- BAR CHART -->
<div class="box box-success">
  <div class="box-header with-border">
    <i class="fa fa-bar-chart"></i>
    <h3 class="box-title">{{ trans('adminlte_lang::message.chart_bar_title') }}</h3>

    <div class="box-tools">
      <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
        <i class="fa fa-calendar"></i> <span class="range-date"></span> </button>
        <!--
          <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
            <i class="fa fa-minus"></i></button>
        -->
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
