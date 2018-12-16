@extends('layouts.app')

@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <h3 class="title-2">recent reports</h3>
                            <div class="chart-info">
                                <div class="chart-info__left">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>API usgae</span>
                                    </div>
                                    <div class="chart-note mr-0">
                                        <span class="dot dot--green"></span>
                                        <span>Devices</span>
                                    </div>
                                </div>
                                <div class="chart-info__right">
                                    <div class="chart-statis">
                                        <span class="index incre">
                                            <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                        <span class="label">API usgae</span>
                                    </div>
                                    <div class="chart-statis mr-0">
                                        <span class="index decre">
                                            <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                        <span class="label">Devices</span>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-report__chart">
                                <canvas id="recent-usage-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-t-20">
                
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Recent Devices</h2>
                    </div>
                </div>

                <div class="col-md-12 m-b-40">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-t-20">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>Device</th>
                                    <th>type</th>
                                    <th>Host ID</th>
                                    <th>Status</th>
                                    <th>date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>999</td>
                                    <td>Mobile</td>
                                    <td>iPhone X 64Gb Grey</td>
                                    <td class="process">Processed</td>
                                    <td>2018-09-29 05:57</td>
                                </tr>
                                <tr>
                                    <td>756</td>
                                    <td>Mobile</td>
                                    <td>Samsung S8 Black</td>
                                    <td class="process">Processed</td>
                                    <td>2018-09-28 01:22</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Game</td>
                                    <td>Game Console Controller</td>
                                    <td class="denied">Denied</td>
                                    <td>2018-09-27 02:12</td>
                                </tr>
                                <tr>
                                    <td>1199</td>
                                    <td>Mobile</td>
                                    <td>iPhone X 256Gb Black</td>
                                    <td class="denied">Denied</td>
                                    <td>2018-09-26 23:06</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Accessories</td>
                                    <td>USB 3.0 Cable</td>
                                    <td class="process">Processed</td>
                                    <td>2018-09-25 19:03</td>
                                </tr>
                                <tr>
                                    <td>199</td>
                                    <td>Accesories</td>
                                    <td>Smartwatch 4.0 LTE Wifi</td>
                                    <td class="denied">Denied</td>
                                    <td>2018-09-29 05:57</td>
                                </tr>
                                <tr>
                                    <td>699</td>
                                    <td>Camera</td>
                                    <td>Camera C430W 4k</td>
                                    <td class="process">Processed</td>
                                    <td>2018-09-24 19:10</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Computer</td>
                                    <td>Macbook Pro Retina 2017</td>
                                    <td class="process">Processed</td>
                                    <td>2018-09-22 00:43</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>

            </div>
@endsection

@section('extra.content')
<script>
    
(function ($) {
  // USE STRICT
  "use strict";

  try {
// Recent Report
    const APIUsage = 'rgba(0,181,233,0.8)'
    const devices = 'rgba(0,173,95,0.8)'

    var elements = 10
    var data1 = [52, 60, 55, 50, 65, 80, 57, 70, 105, 115]
    var data2 = [102, 70, 80, 100, 56, 53, 80, 75, 65, 90]

    var ctx = document.getElementById("recent-usage-chart");
    if (ctx) {
      ctx.height = 250;
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Day 10', 'Day 9', 'Day 8', 'Day 7', 'Day 6', 'Day 5', 'Day 4', 'Day 3', 'Day 2', 'Day 1'],
          datasets: [
            {
              label: 'API Calls',
              backgroundColor: APIUsage,
              borderColor: 'transparent',
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: data1

            },
            {
              label: 'Device connected',
              backgroundColor: devices,
              borderColor: 'transparent',
              pointHoverBackgroundColor: '#fff',
              borderWidth: 0,
              data: data2

            }
          ]
        },
        options: {
          maintainAspectRatio: true,
          legend: {
            display: false
          },
          responsive: true,
          scales: {
            xAxes: [{
              gridLines: {
                drawOnChartArea: true,
                color: '#f2f2f2'
              },
              ticks: {
                fontFamily: "Poppins",
                fontSize: 12
              }
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                maxTicksLimit: 5,
                stepSize: 50,
                max: 150,
                fontFamily: "Poppins",
                fontSize: 12
              },
              gridLines: {
                display: true,
                color: '#f2f2f2'

              }
            }]
          },
          elements: {
            point: {
              radius: 0,
              hitRadius: 10,
              hoverRadius: 4,
              hoverBorderWidth: 3
            }
          }


        }
      });
    }
}
catch (error) {
    console.log(error);
}
})(jQuery);

</script>
@endsection