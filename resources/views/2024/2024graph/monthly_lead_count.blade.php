<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Lives 2024</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link  rel="stylesheet" href="{{ asset('css/graphdashboard.css') }}">

</head>
<body>

	<div id="container"></div>
    <br>
    {{-- <div style="display: flex; justify-content: center;">
        <div><h3>Total New Lives: <u>{{ $total_newlives[0] }}</u></h3></div>            
        <div style="margin-left: 100px;"><h3>Total Renewals: <u>{{ $total_existing[0] }}</u></h3></div>
    </div> --}}

</body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var monthly_lead_count = <?php echo json_encode($monthly_lead_count)?>;
    
    Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Monthly Count of Leads 2024'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
        },
        yAxis: {
            title: {
                text: 'Number of Lead Counts'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        series: [{
            name: 'New Lives',
            data: monthly_lead_count,
            dataLabels: {
                enabled: true,
                formatter: function() {
                    return Highcharts.numberFormat(this.y, 0, ',', ',');
                }
            },
            enableMouseTracking: true,
            lineWidth: 6 // change the thickness of the line
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script>


</html>

