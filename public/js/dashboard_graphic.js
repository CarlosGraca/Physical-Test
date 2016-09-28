$('.daterange').daterangepicker({
  locale: {
      format: 'DD-MM-YYYY'
    },
  ranges: {
    'Today': [moment(), moment()],
    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    'This Month': [moment().startOf('month'), moment().endOf('month')],
    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
  },
  startDate: moment().subtract(29, 'days'),
  endDate: moment()
}, function (start, end) {
    //bar_chart(start,end);
    console.log('Start: '+start.format('DD-MM-YYYY')+' - End: '+end.format('DD-MM-YYYY'));
    $('.range-date').text('Start: '+start.format('DD-MM-YYYY')+' - End: '+end.format('DD-MM-YYYY'));
  //window.alert("You chose: " + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    getDashboardData(start,end,'');
});

function bar_chart(label, dataTests, dataSheets) {
  var areaChartData = {
    labels: label,
    datasets: [
      {
        label: "Tests",
        fillColor: "#00c0ef",
        strokeColor: "rgba(210, 214, 222, 1)",
        pointColor: "rgba(210, 214, 222, 1)",
        pointStrokeColor: "#c1c7d1",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(220,220,220,1)",
        data: dataTests
      },
      {
        label: "Sheets",
        fillColor: "#00a65a",
        strokeColor: "rgba(60,141,188,0.8)",
        pointColor: "#3b8bba",
        pointStrokeColor: "rgba(60,141,188,1)",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(60,141,188,1)",
        data: dataSheets
      }
    ]
  };

  //-------------
  //- BAR CHART -
  //-------------
  var barChartCanvas = $("#barChart").get(0).getContext("2d");
  var barChart = new Chart(barChartCanvas);
  var barChartData = areaChartData;
  barChartData.datasets[1].fillColor = "#00a65a";
  barChartData.datasets[1].strokeColor = "#00a65a";
  barChartData.datasets[1].pointColor = "#00a65a";
  var barChartOptions = {
    //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
    scaleBeginAtZero: true,
    //Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines: true,
    //String - Colour of the grid lines
    scaleGridLineColor: "rgba(0,0,0,.05)",
    //Number - Width of the grid lines
    scaleGridLineWidth: 1,
    //Boolean - Whether to show horizontal lines (except X axis)
    scaleShowHorizontalLines: true,
    //Boolean - Whether to show vertical lines (except Y axis)
    scaleShowVerticalLines: true,
    //Boolean - If there is a stroke on each bar
    barShowStroke: true,
    //Number - Pixel width of the bar stroke
    barStrokeWidth: 2,
    //Number - Spacing between each of the X value sets
    barValueSpacing: 5,
    //Number - Spacing between data sets within X values
    barDatasetSpacing: 1,
    //String - A legend template
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
    //Boolean - whether to make the chart responsive
    responsive: true,
    maintainAspectRatio: true
  };

  barChartOptions.datasetFill = false;
  barChart.Bar(barChartData, barChartOptions);
}

function getDashboardData(start, end, type) {
  var url = 'dashboard/graphic';

  var startDate = (type == 'local' ? start : start.format('YYYY-MM-DD')),
  endDate = (type == 'local' ? end : end.format('YYYY-MM-DD')),
  params = {'startDate':startDate, 'endDate':endDate};

  $.ajax({
        url: url,
        data: params,
        type: 'POST',
        dataType: 'json',
        success: function (result) {
            var labels = [], dataTests=[], dataSheets=[];

            if(result['tests'].length > result['sheets'].length){

                for (var i = 0; i < result['tests'].length; i++) {
                    if (result['tests'][i].month == result['sheets'][i].month) {
                        labels.push(result['tests'][i].month);
                        dataTests.push(result['tests'][i].test_count);
                        dataSheets.push(result['sheets'][i].sheet_count);
                    }else{
                      labels.push(result['tests'][i].month);
                      dataTests.push(result['tests'][i].test_count);
                      dataSheets.push(0);
                    }
                }

            }else{

              for (var i = 0; i < result['sheets'].length; i++) {
                  if (result['tests'][i].month == result['sheets'][i].month) {
                      labels.push(result['sheets'][i].month);
                      dataSheets.push(result['sheets'][i].sheet_count);
                      dataTests.push(result['tests'][i].test_count);
                  }else{
                    labels.push(result['sheets'][i].month);
                    dataSheets.push(result['sheets'][i].sheet_count);
                    dataTests.push(0);
                  }
              }

            }

            bar_chart(labels, dataTests, dataSheets);

        },
        error: function (data) {
            console.log('Error:', data);
        }
  });
}

$(function () {
  var date = new Date();

  var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
  var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);

  var startMonthShow = dateFormat(firstDay, 'dd-mm-yyyy');
  var endMonthShow = dateFormat(lastDay, 'dd-mm-yyyy');

  var startMonth = dateFormat(firstDay, 'yyyy-mm-dd');
  var endMonth = dateFormat(lastDay, 'yyyy-mm-dd');

  $('.range-date').text('Start: '+startMonthShow+' - End: '+endMonthShow);
  var chart = $('#barChart').get(0);
  if(chart !== undefined)
    getDashboardData(startMonth,endMonth,'local');
});