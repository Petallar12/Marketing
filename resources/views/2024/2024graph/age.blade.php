<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Websites with Closed Leads - Based on Headcount 2024</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link  rel="stylesheet" href="{{ asset('css/graphdashboard.css') }}">
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
    <div class="container">
        <div id="container"></div>
    </div>
    <script type="text/javascript">
        var age = <?php echo json_encode($age)?>;
        var countage = age.map(function(obj) {
            return obj.count;
        });

        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Age of Clients'
            },
            xAxis: {
                categories: <?php echo json_encode($array) ?>
            },
            yAxis: {
                title: {
                    text: 'Total Count of Age of Clients'
                }
            },
            series: [{
                name: 'Total',
                data: countage,
                dataLabels: {
                    enabled: true,
                    top: true
                }
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
</body>
</html>
