<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Websites with Closed Leads - Based on Headcount 2024</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/graphdashboard.css') }}">
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>
    <div class="container">
        <div id="container"></div>
    </div>
    <script type="text/javascript">
        var contributing_website = <?php echo json_encode($contributing_website)?>;
        var countcontributing_website = contributing_website.map(function(obj) {
            return obj.count;
        });

        Highcharts.chart('container', {
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Contributing Website or Platform'
    },
    xAxis: {
        // Enabled labels for xAxis
        categories: <?php echo json_encode($array) ?>,
        labels: {
            enabled: true
        }
    },
    yAxis: {
        min: 0, // Set minimum value for yAxis if you want to remove the 0
        title: {
            text: 'Contributing Websites or Platform'
        }
    },
    legend: {
        reversed: true
    },
    plotOptions: {
        series: {
            stacking: 'normal', // Use stacking to show labels clearly
            dataLabels: {
                enabled: true,
                inside: true, // Set labels inside the bars
                align: 'left', // Align labels to the left side
                color: '#FFFFFF' // Set color of labels to white or any other contrasting color
            }
        }
    },
    series: [{
        name: 'Total',
        data: countcontributing_website
    }]
});

    </script>
</body>
</html>
