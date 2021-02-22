<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>SHOPPY</title>
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
          text-align: left;
        }
    </style>
 <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
     <?php include 'dd.php';?>
<hr>
     <section class="module-medium" id="demos">
        <div align="right" style="margin-right: 20px">
          <div class="onoffswitch" style="text-align:left;">
              <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
              <label class="onoffswitch-label" for="myonoffswitch">
                  <span class="onoffswitch-inner"></span>
                  <span class="onoffswitch-switch"></span>
              </label>
          </div>
        </div>
   </section>
 <section>  
<div align="center">
  
        
		
        
		 
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14737.948143168856!2d72.93424474999999!3d22.56088065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1582573793219!5m2!1sen!2sin" width="500px" height="340px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    
        </div>




      </section>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
  </body>
</html>
