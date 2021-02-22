<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
  <link href="assets/css/style.css" rel="stylesheet">
  <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoppy</title>
    <style>
        .onoffswitch {
         position: relative; width: 113px;
         -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
        }
        .onoffswitch-checkbox {
         display: none;
        }
        .onoffswitch-label {
         display: block; overflow: hidden; cursor: pointer;
         border: 2px solid #999999; border-radius: 50px;
        }
        .onoffswitch-inner {
         display: block; width: 200%; margin-left: -100%;
         transition: margin 0.3s ease-in 0s;
        }
        .onoffswitch-inner:before, .onoffswitch-inner:after {
         display: block; float: left; width: 50%; height: 32px; padding: 0; line-height: 32px;
         font-size: 17px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
         box-sizing: border-box;
        }
        .onoffswitch-inner:before {
         content: "ON";
         padding-left: 14px;
         background-color: #21EB32; color: #FFFFFF;
        }
        .onoffswitch-inner:after {
         content: "OFF";
         padding-right: 14px;
         background-color: #F70808; color: #FCFCFC;
         text-align: right;
        }
        .onoffswitch-switch {
         display: block; width: 40px; margin: -4px;
         background: #FFFFFF;
         position: absolute; top: 0; bottom: 0;
         right: 77px;
         border: 2px solid #999999; border-radius: 50px;
         transition: all 0.3s ease-in 0s;
        }
        .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
         margin-left: 0;
        }
        .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
         right: 0px;
        }
        .txt {
          position: absolute;
          top: 8px;
          left: 0px;
          background: rgb(0, 0, 0); /* Fallback color */
          background: rgba(0, 0, 0, 0); /* Black background with 0.5 opacity */
          color: #f1f1f1;
          width: 100%;
          padding: 20px;
		text-align: left;}
		  table{
			  border-collapse:collapse;
			  
			  width:80%;
		  }
         table.center{
                margin:0px auto; 
         }
         th,td{
         	text-align:left;
			padding:4px;
		 }
         tr:nth-child(even){background-color:#f2f2f2}
         th{
			 background-color:#4CAF50;
			 color:white;
         }	
         table#t01 tr:nth-child(even) {
         background-color: #eee;
         }
         table#t01 tr:nth-child(odd) {
         background-color: #fff;
        }
          table#t01 th 
           background-color:green;
            color: white;
          }		 
        }
		
		
    </style>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60" >
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <?php include 'dd.php' ?>
	  
      <div class="main showcase-page"><br>
        <section class="module-medium" id="demos">
          <br>
          <div align="right" style="margin-right: 20px">
          <div class="onoffswitch" style="text-align:left;">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
              <label class="onoffswitch-label" for="myonoffswitch">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
              </label>
          </div>
        </div>
          <br>
		  <h2 align=center>Performance for today</h2>
       <table class="center" align="center" id="t01">
        <tr>
        <th>Trips</th>
        <th>Login hours</th>
        <th>Touchpoints</th>
        </tr>
      <tr>
      <td>8</td>
      <td>8.7</td>
      <td>18</td>
      </tr>
      </table>
	  </div>
	  <div>
	 
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <a class="content-box" style="margin-bottom: 0px; margin: 5px 0;" href="Balance.php">
                <div align="left" margin="10px" height="33.33%" spacing="10px">
                  <div class="content-box-image" style="height:150px;  position: relative; text-align: center; color: white;">
                    <img src="images/balance1.jpg" style="height:150px"><h3>
                      <div class="txt">
                            Target Pay:
							<br>50
							</div></h3>
                  <h3><?php  ?></h3>
                  </div> 
                </div>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                <a class="content-box" style="margin-bottom: 0px; margin: 5px 0;" href="currentorder.php">
                <div align="left" margin="10px" height="33.33%" spacing="10px">
                  <div class="content-box-image" style="height:150px; position: relative; text-align: center; color:  white;">
                    <img src="images/order.jpg" style="height:150px"><h3>
                      <div class="txt">
                            Order Pay:
							<br>70
							</div></h3>
                  <h3><?php  ?></h3>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    </body>
</html>




<!--
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<br><div class="main showcase-page"><br>
        <section class="module-medium" id="demos">
          <br>
          <div align="right" style="margin-right: 20px">
          <div class="onoffswitch" style="text-align:left;">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
              <label class="onoffswitch-label" for="myonoffswitch">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
              </label>
          </div>
        </div>
          <br>
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <a class="content-box" style="margin-bottom: 0px; margin: 5px 0;">
                <div align="left" margin="10px" height="33.33%" spacing="10px">
                  <div class="content-box-image" style="height:150px;  position: absolute; text-align: center; color: white;">
                    <img src="images/balance1.jpg" style="height:150px; width:100%;"><h3>
                      <div class="txt">
                           pay:</div></h3>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 col-xs-12">
                <a class="content-box" style="margin-bottom: 0px; margin: 5px 0;" href="currentorder.php">
                <div align="left" margin="10px" height="33.33%" spacing="10px">
                  <div class="content-box-image" style="height:150px">
                    <style="height:150px"><h3>
                      <div class="txt">
                            Order :</div></h3>
                  <h3></h3>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
      </div>
    <div class="w3-container">
	Order pay
      </div>

    <footer class="w3-container">
      <meta name="viewport" content="width=device-width, initial-scale=1">






<div class="dropdown">
  <button class="dropbtn">7000</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

    </footer>
  </div>
  <hr>
  
</div>



</div>
</body>
</html>
--> 