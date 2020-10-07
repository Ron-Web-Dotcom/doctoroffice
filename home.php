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
</head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
<body>
<div class="homeCover">
	<div class="row"></div>
 </div>
 </div>
        <div style="background-color: #fff; height: 50px;"></div>
        <div class="container cta-100 ">
        <div class="container">
          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                           <div id="realTimeContents">

                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><p id="demo"></p></span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="images/urgent.png"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                                <h5 style="color:blue;">Urgent Care</h5>
                              
                            </div>
                            <!--Data-->
                           
                            <!--Text-->

                            <div class="item-box-blog-text">
                              <p >Stevens doctors see and treat several medical issues including 90% of the top issues seen by Urgent Care and the E.R.</p>
                            </div>
    
                            
                            <!--Read More Button-->
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"><span class="mon"><p id="demo1"></p></span></div>
                            <!--Image-->
                            <figure> <img alt="" src="images/advice.jpg" width="7px"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                            
                                <h5 style="color:blue;">Medical Advice</h5>
                            
                            </div>
                           
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Not sure what to do? Get medical advice from our Stevens doctors when you send us your question.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"><span class="mon"><p id="demo2"></p></span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="images/labtest.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                            <h5 style="color:blue;">Labs and Screening</h5>
                            </div>
                           <!--Text-->
                            <div class="item-box-blog-text">
                              <p>If further investigation is required, our doctors can send a Lab Request to you / your nearest laboratory.</p>
                            <br>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                  <div class="carousel-item ">
                    <div class="row">
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><p id="demo3"></p></span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="images/addiction.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                            <h5 style="color:blue;">Addiction</h5>
                            </div>
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p id="txt">If you’ve fallen into a pattern of misusing alcohol, drugs, cigarettes, medications or food, our providers can help</p>
                              <br>

                            </div>
                           </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><p id="demo4"></p></span> </div>
                            <!--Image-->
                            <figure> <a href="Portallogin.html"><img alt="" src="images/mood.jpg"> </a></figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">

                            <h5 style="color:blue;">Depression and Mood</h5>

                            </div>
                          
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p >There are several treatment approaches for ​depression and ​ mood issues that can help you start to feel better.</p>
                            </div>
                            <br>
                            <br>
                            
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4" >
                        <div class="item-box-blog">
                          <div class="item-box-blog-image">
                            <!--Date-->
                            <div class="item-box-blog-date bg-blue-ui white"> <span class="mon"><p id="demo5"></span> </div>
                            <!--Image-->
                            <figure> <img alt="" src="images/therapy.jpg"> </figure>
                          </div>
                          <div class="item-box-blog-body">
                            <!--Heading-->
                            <div class="item-box-blog-heading">
                            <h5 style="color:blue;">Therapy</h5>

                            </div>
                           
                            <!--Text-->
                            <div class="item-box-blog-text">
                              <p>Our therapists can provide a safe, confidential space for you to get the treatment you need to help with your life.</p>
                            </div>
                            <br>
                        </div>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
           
 </div>
          </div>
        </div>
      </div>
 </div>
 </form>

</body>
<?php include 'footer.php'?>
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/demo.js"></script>
</html>