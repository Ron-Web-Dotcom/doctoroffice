<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Steven Hospital</title>
<!------ Include your HEAD tag ---------->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/home.css" type="text/css" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>
<!------ Ending your HEAD tag ---------->
<body>
<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

	<a class="navbar-brand"  onclick="myFunction()"><img src="doclogo.png"width="38px"/></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav navbar-right">
				
				<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
                <li>
					<a href="aboutus.php" role="button" aria-expanded="false">About Us <span class="sr-only"></span> </a>
					
				</li>
                <li>
					<a href="feedback.php" role="button" aria-expanded="false">Feedback <span class="sr-only"></span> </a>
					
				</li>
                <li>
					<a href="Portal/index.php" role="button" aria-expanded="false">Login <span class="sr-only"></span> </a>
					
				</li>
            
       
			</ul>
			<form class="navbar-form navbar-right search-form"  >
        
        <?php include "search.html"?>
		</div>

	</div>
 </nav>


<div class="homeCover">
 </div>
<style>
 .aboutus-section {
    padding: margin: 0;
  
   
    margin-right: -13%; 
 }
 .aboutus-title {
    font-size: 30px;
    letter-spacing: 0;
    line-height: 32px;
    margin: 0 0 39px;
    padding: 0 0 11px;
    position: relative;
    text-transform: uppercase;
    color: #000;
 }
 .aboutus-title::after {
    background: blue none repeat scroll 0 0;
    bottom: 0;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    width: 54px;
 }
 .aboutus-text {
    color: #606060;
    font-size: 13px;
    line-height: 22px;
    margin: 0 0 35px;
 }
 a:hover, a:active {
    color: #ffb901;
    text-decoration: none;
    outline: 0;
 }
 .aboutus-more {
    border: 1px solid #fdb801;
    border-radius: 25px;
    color: #fdb801;
    display: inline-block;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 0;
    padding: 7px 20px;
    text-transform: uppercase;
 }
.feature .feature-box .iconset {
    background: #fff none repeat scroll 0 0;
    float: left;
    position: relative;
    width: 18%;
 }
 .feature .feature-box .iconset::after {
    background: blue none repeat scroll 0 0;
    content: "";
    height: 150%;
    left: 43%;
    position: absolute;
    top: 100%;
    width: 1px;}

 .feature .feature-box .feature-content h4 {
    color: #0f0f0f;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 5px;
 }
.feature .feature-box .feature-content {
    float: center;
    padding-left: 28px;
    width: 78%;
 }
 .feature .feature-box .feature-content h4 {
    color: #0f0f0f;
    font-size: 18px;
    letter-spacing: 0;
    line-height: 22px;
    margin: 0 0 5px;
 }
.feature .feature-box .feature-content p {
    color: #606060;
    font-size: 13px;
    line-height: 22px;
 }
.iconset :hover {
    background-color: grey;
 }
.icon {
    color : blue;
    padding:0px;
    font-size:40px;
    border: 1px solid blue;
    border-radius: 100px;
    color : blue;
    font-size: 28px;
    height: 70px;
    line-height: 70px;
    text-align: center;
    width: 70px;
 }
 }
</style>
<div id="realTimeContents">
 <div class="aboutus-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus">
                        <h2 class="aboutus-title">About Us</h2>
                        <h3>YOU'RE SAFE WITH US.</h3>

                        <p class="aboutus-text">
                        PHI includes a very wide set of personally identifiable health and health-related data,
                         from insurance and billing information, to diagnosis data, clinical care data, and lab results such as images
                          and test results.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutus-banner">
                        <img src="doctor.png" width="300px" height="450px"alt="">
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div class="feature">
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Mission</h4>
                                    <p class="aboutus-text">To improve affordable access to healthcare:
                                      Throughout the Caribbean One country/patient/day at a time</p>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>Who</h4>
                                    <p class="aboutus-text">Founded in 2020 with the mission to improve access to healthcare, Stevens Hospital is an innovative medical service that allows patients to connect with the best doctors in the region.
 </p> 
 </div>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="clearfix">
                                <div class="iconset">
                                    <span class="glyphicon glyphicon-cog icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h4>What </h4>
                                    <p class="aboutus-text">Get a medical opinion / second opinion from a doctor
                                     Book an appointment
                                     Connect with a certified doctor
                                    Get treatment online!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
          </div>
        </div>
      </div>
      </div>
 </div>
 </form>

</body>
<script>
 function myFunction() {
  var month = new Array();
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";

  var d = new Date();
  var n = month[d.getMonth()];
  document.getElementById("demo").innerHTML = n;
  document.getElementById("demo1").innerHTML = n;
  document.getElementById("demo2").innerHTML = n;
  document.getElementById("demo3").innerHTML = n;
  document.getElementById("demo4").innerHTML = n;
  document.getElementById("demo5").innerHTML = n;




 }
</script>
<?php include 'footer.php'?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/demo.js"></script>
</html>