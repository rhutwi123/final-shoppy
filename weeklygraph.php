<?php
$con  = mysqli_connect("localhost","root","","shoppy");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT o_id, rating FROM `order_delivery`";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            
            $sales[] = $row['rating'];
        }
		
 $arr=array_count_values($sales);
;
 }
 
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Graph</title> 
		<style>
		body {
    margin: 0;
    padding: 0;
    background:#ccc;
}
		.chart{
		margin-top:9%;
		height:20%;
		width:60%;
		margin-left:20%;
		box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12), 0 1px 4px rgba(0, 0, 0, 0.24);
		border-radius:35px;
		margin-bottom:9%;
}


h3{
	
	letter-spacing:2px;
}
h2{
	
	letter-spacing:5px;
}



.wrapper {
    width: 100%;
    min-height: 800px;
    position: absolute;
    display: block;
	
}
.progressbar-wrapper {
    width: 400px;
    height: 60px;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
}
.progressbar {
    width: 100%;
    height: 100%;
    transform-style: preserve-3d;
    transform: rotateX(-20deg) rotateY(-30deg);
}
.side {
    width: 100%;
    height: 100%;
    background-color: rgba(254, 254, 254, 0.3);
    top: 0;
    left: 0;
    position: absolute;
}
.bottom {
    box-shadow: 10px 10px 50px 5px rgba(90, 90, 90, 0.7);
    transform: rotateX(90deg);
    transform-origin: bottom;
}
.top {
    transform: translate(0, -100%) rotateX(90deg);
    transform-origin: bottom;
}
.back {
    transform: translateZ(-60px);
}
.left {
    width: 60px;
    transform: rotateY(90deg);
    transform-origin: left;
    background-color: rgba(144, 137, 225, 0.6);
}
.bar {
    height:100%;
    background-color: rgba(144, 137, 225, 1);
    box-shadow: 5px 5px 50px 5px rgba(144, 137, 225, 0.3);
    width:70%;
}
		
		</style>
    </head>
    <body>
	 <?php include 'dd.php' ?>
        <div class="chart">
            <h2 align="center">RATING'S REVIEW</h2>
            <h3 align="center">Daily</h3>
            <canvas  id="chartjs_bar"></canvas> 
        </div>  
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <script src="jquery-2.1.4.js"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
    <div class="wrapper">
	<h2 align="center">SET A GOAL</h2>
            <h3 align="center">Daily</h3>
           <div class="progressbar-wrapper">
                <div class="progressbar">
                    <div class="side front">
                        <div class="bar"></div>
                    </div>
                    <div class="side back">
                        <div class="bar"></div>
                    </div>
                    <div class="side top">
                        <div class="bar"></div>
                    </div>
                    <div class="side bottom">
                        <div class="bar"></div>
                    </div>
                    <div class="side left"></div>
                </div>
           </div>
    </div>
    <script>
        $('.bar').width('80%');
    </script>    
    </body>
</html>
       
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:[3,5,4,1,2],
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                
                            ],
                            data:[<?php $s2 = array();
foreach ($arr as $value)
$s2[] = round($value);
echo implode(',',$s2); ?>],
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 16,
                        }
						
                    },
					scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }

 
 
                }
                });
    </script>
</html>