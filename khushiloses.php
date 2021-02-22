<html>
<head>
<meta name="viewport" content="width=device-width, initial scale=1.0">
</head>
<body>
<section>
 <?php include 'dd.php';?>
 </section>
<section>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Date', ''],
          ['2014', 40],
          ['2015', 50],
          ['2016', 70],
          ['2017', 50]
        ]);

        var options = {
          chart: {
            title: ' Performance',
          
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  
<div align="center">
    <div id="columnchart_material" style="height:350px;" content="width=device-width, initial scale=1.0"></div>
	</div>
 


	</section></body>
</html>	
	