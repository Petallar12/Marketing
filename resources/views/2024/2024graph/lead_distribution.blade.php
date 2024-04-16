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
        var lead_distribution = <?php echo json_encode($lead_distribution)?>;
        var countlead_distribution = lead_distribution.map(function(obj) {
            return obj.count;
        });

        Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Total Count of Lead Base on Ad and Organic'
    },
    tooltip: {
        pointFormat: '<span>{series.name}: <b>{point.y}</b> ({point.percentage:.1f}%)</span>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '{point.y} ({point.percentage:.1f}%)',
                distance: -50, // Negative values bring the labels inside the slices
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            showInLegend: true // This will show the legend outside the pie
        }
    },
    series: [{
        name: 'Marketing Leads',
        colorByPoint: true,
        data: [
            { name: 'Ad', y: countlead_distribution[0] },
            { name: 'Organic', y: countlead_distribution[1] },
            // Add more data points as needed
        ]
    }]
});    </script>


</body>
</html>
