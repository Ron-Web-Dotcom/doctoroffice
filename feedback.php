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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link rel="stylesheet" href="form.css" >
<script src="form.js"></script>
</head>
<!------ Ending your HEAD tag ---------->
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

 </form>

<div class="homeCover">
	<div class="row"></div>
 </div>
 </div>       
<body>
<div class="container">
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 col-md-offset-3 form-container">
                    <h2>Feedback</h2> 
                    <p> Please provide your feedback below: </p>
                    <form role="form" action="feedconfig.php" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How do you rate your overall experience?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="experience" id="radio_experience" value="good" >
                                        Good 
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="comment" id="comment" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
</body>
<?php include 'footer.php'?>
</html>