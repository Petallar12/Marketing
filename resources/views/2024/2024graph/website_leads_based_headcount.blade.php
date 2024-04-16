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
        var website_leads_based_headcount = <?php echo json_encode($website_leads_based_headcount)?>;
        var countwebsite_leads_based_headcount = website_leads_based_headcount.map(function(obj) {
            return obj.count;
        });

        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Websites with Closed Leads - Based on Headcount'
            },
          
   
        xAxis: {
            categories: <?php echo json_encode($array) ?>,
            labels: {
                useHTML: true, // Enable HTML for the labels
               
            }
        },

            yAxis: {
                title: {
                    text: 'Total Number'
                }
            },
            plotOptions: {
        series: {
            cursor: 'pointer',
            point: {
                events: {
                    click: function () {
                        // Construct the URL for redirection with query parameter
                        var url = '/2024/dashboard_index/source_index?source_inquiry=' + encodeURIComponent(this.category);
                        // Redirect to the URL
                        window.location.href = url;
                    }
                }
            }
        }
    },
            series: [{
                name: 'Total',
                data: countwebsite_leads_based_headcount,
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
