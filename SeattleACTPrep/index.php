<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../stylesheets/landing-page-style.css">





</head>
<body>
	
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
			<a class="navbar-brand" href="http://www.206tutoring.com"><img class="nav-image" src="../assets/home_page/spaceneedlelogo.png" alt="SpaceNeedle"></a>
			
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <!--<a class="navbar-brand" href="http://www.206tutoring.com">
	<img src="../assets/home_page/spaceneedlelogosquaresmall.png" alt="SpaceNeedle">
	</a>-->
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li>
                        <a href="../test_prep.php">Test and College Prep</a>
                    </li>
                    <li>
                        <a href="../tutoring.html">Tutoring</a>
                    </li>
                      
                    <li>
                        <a href="../music.html">Music Lessons</a>
                    </li>

                    <li>
                        <a href="../about.php">About</a>
                    </li>

                    <li>
                        <a href="../payment.php">Payment</a>
                    </li>

	          </ul>
	        </li>
	      </ul>
	      
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="../contact.php">Contact Us</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

<div class="container">
  <div>
  		 <h1>SEATTLE ACT PREP</h1>
		 
              <div class="col-md-4 landing">
                <img src="../SeattleACTPrep/cml-pic.jpg" class="img-responsive" alt="Responsive image">
              </div>
              <div class="col-md-4 landing-text">
                <p>206 Tutoring offers full-service ACT preparation, with expert instructors and average gains of <b>4 points.</b></p>
                <p>The ACT is more straightforward than the SAT, but its time constraints are difficult and can result in surprise and stress without test preparation. Our ACT preparation focuses on <b>answering questions efficiently.</b></p>
                <p><b>English</b> consists of five passages of fifteen questions each, with an emphasis on grammar and sentence correction.</p>
                <p><b>Math</b> covers more concepts than SAT math, all the way through trigonometry, which means it’s easier—as long as you know math.</p>
                <p><b>Reading</b> contains four passages (prose fiction, humanities, social science, and natural science) with ten questions each.</p>
                <p><b>Science</b> tests the ability to interpret lab reports and graphs. It is similar to the reading section. You don’t even need to know science.<p>
              </div>
			  <div class="col-md-4">
			                <?php include '../landingpage-contactform.php'; ?>
			                <br>
			              </div>
              
  		
          </div>

  
</div>
<!-- Footer -->
<?php include "../footer.php"; ?>
</body>
</html>




