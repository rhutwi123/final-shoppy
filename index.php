<html lang="en-US" dir="ltr">
  <head>
  <link href="assets/css/style.css" rel="stylesheet">
  <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoppy</title>
	<style>
	.col-text {
  height:20em;
}
.grid-flex {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  flex-direction: row; 
  -webkit-flex-direction: row;
  -webkit-flex-wrap: wrap;
  -webkit-justify-content: space-around;
}
.col {
  -webkit-box-flex: 1;
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
}
.col-left {
  -webkit-box-ordinal-group:-1;
  -webkit-order: -1;
  -ms-flex-order: -1;
  order: -1;
}
.col-text{
  display: flex;
  align-items: center;
  justify-content: center;
}
.Aligner-item {
  width: 60%;
}
.col-image {
  background-size: cover;
  background-position:center center;
}

@media (max-width: 640px) {
  .grid-flex {
    height: 40em;
    display: -webkit-flex;
    -webkit-flex-direction: column;
    flex-direction: column; 
   }
   

  .col {
    order:vertical;
  }
  .col-left {
    -webkit-box-ordinal-group:0;
    -webkit-order: 0;
    -ms-flex-order: 0;
    order: 0;
  }
  .col-text div p {
    padding: 1em;
  }
  .Aligner-item {
    width: 90%;
  }
}
/* PROGRESS BAR CSS*/
body {
  padding: 50px;
}

.progress-bg {
  margin: 0 auto;
  width: 65%;
  height: 40px;
  border-radius: 10px;
  text-align: center;
  background: url("http://www.atsu.edu/stlclinic/images/progress-bar-bg.jpg") repeat;
  -moz-box-shadow: inset 0 0 10px #ccc;
  -webkit-box-shadow: inset 0 0 10px #ccc;
  box-shadow: inset 0 0 10px #ccc;
}

.progress-bar {
  height: 40px;
  border-radius: 10px;
  float: left;
  width: 50%;
  /* fallback */
  background-color: #1c314a;
  /* Safari 4-5, Chrome 1-9 */
  background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#1c314a), to(#27425f));
  /* Safari 5.1, Chrome 10+ */
  background: -webkit-linear-gradient(top, #1c314a, #27425f);
  /* Firefox 3.6+ */
  background: -moz-linear-gradient(top, #1c314a, #27425f);
  /* IE 10 */
  background: -ms-linear-gradient(top, #1c314a, #27425f);
  /* Opera 11.10+ */
  background: -o-linear-gradient(top, #1c314a, #27425f);
}

.progress-bg h3.goal,
.progress-bg h3.raised {
  font-family: Arial, sans-serif;
  font-size: 1em;
  font-weight: 500;
  line-height: 40px;
  margin: 0;
  padding: 0;
  text-align: center;
  display: inline;
}

.progress-bg h3.raised {
  color: #fff;
  margin: 14px 25px 0 50px;
  padding: 0 25px 0 0;
}

.progress-bg h3.goal {
  color: #b2b2b2;
  text-align: center;
  white-space: nowrap;
}

body .progress-bg h3.raised {
  -webkit-animation: fadein 4s;
  /* Safari and Chrome */
  -moz-animation: fadein 4s;
  /* Firefox */
  -ms-animation: fadein 4s;
  /* Internet Explorer */
  -o-animation: fadein 4s;
  /* Opera */
  animation: fadein 4s;
}

@keyframes fadein {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}


/* Firefox */

@-moz-keyframes fadein {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}


/* Safari and Chrome */

@-webkit-keyframes fadein {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}


/* Internet Explorer */

@-ms-keyframes fadein {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

​
/* Opera */

@-o-keyframes fadein {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

​ .progress-bg h3.goal {
  float: right;
  display: none;
  padding: 0 25px 0 0;
  text-align: center;
}

body .progress-bg div {
  -webkit-animation: progress-bar 2s ease forwards;
  -moz-animation: progress-bar 2s ease forwards;
  -o-animation: progress-bar 2s ease forwards;
  animation: progress-bar 2s ease forwards;
}

@-webkit-keyframes progress-bar {
  from {
    width: 0%;
  }
  to {
    width: 80%;
  }
}

@-moz-keyframes progress-bar {
  from {
    width: 0%;
  }
  to {
    width: 80%;
  }
}

@-o-keyframes progress-bar {
  from {
    width: 0%;
  }
  to {
    width: 80%;
  }
}

@keyframes progress-bar {
  from {
    width: 0%;
  }
  to {
    width: 80%;
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
	  
	  <section style="margin-top:10%">
  <div class="grid-flex">
    <div class="col col-image">
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_HBXF2O.json"  background="transparent"  speed="0.8"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
    </div>
    <div class="col col-text">
      <div class="Aligner-item">
        <h4> You have helped <strong> 13 </strong> Homes this week</h4>
         <h4>Earned<strong> 400/-</strong> Base income</h4>
      
      </div>
    </div>
  </div>
  </section>
  </div>
<h3 align="center">Goal:$100</h3>
</div>
  <div class="progress-bg">
  <div class="progress-bar">
    <h3 class="raised">$50&nbsp;</h3>
  </div></div>

  <h3 align="center"> Go online?</h3>
  <div align="center"> <?php include 'togg.php'; ?></div>
  
	  
	  
	  
	  
	   <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    </body>
</html>