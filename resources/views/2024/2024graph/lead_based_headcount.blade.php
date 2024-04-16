<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Leads Count of 2024</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/graphdashboard.css') }}">
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
    <div class="container">
        <div id="container"></div>
    </div>
    <script type="text/javascript">
        var source = <?php echo json_encode($lead_based_headcount)?>;
        var countlead_based_headcount = source.map(function(obj) {
            return obj.count;
        });

        Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Sold based on Headcounts'
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
            { name: 'Ad', y: countlead_based_headcount[0] },
            { name: 'Organic', y: countlead_based_headcount[1] },
            // Add more data points as needed
        ]
    }]
});
    </script>
</body>
</html>
