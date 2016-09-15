<?php
session_start();
$_SESSION['myValue']="Seattle Guitar Lessons";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seattle Guitar Lessons</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/small-business.css" rel="stylesheet">

    <!-- Old stylesheets we still need -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" type="text/css" href="../stylesheets/style.css">
	  <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
	  <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-background" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../home.php">
                    <img src="../assets/home_page/spaceneedlelogosquaresmall.png" alt="SpaceNeedle">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse text-white" id="bs-example-navbar-collapse-1">
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
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div>
            <div class="col-md-4">
              <div class="video-container">
                <iframe width="420" height="315"
                src="https://www.youtube.com/embed/sdMsMMCOG0M">
                </iframe>
              </div>
            </div>
            <div class="col-md-4">
              <h1>SEATTLE GUITAR LESSONS</h1>
              <h6>206 Music Lessons is happy to offer <b>guitar lessons</b>—both electrical and acoustic. If you’re interested in starting the guitar from scratch, or already have some experience and want to pick up new techniques and styles, we have the right instructor for you.</h6>
              <h6>We pride ourselves on hiring only the most skilled and dedicated music-education professionals, and matching students to someone aligned with their interests, aspirations, and ability level. Our instructors’ training runs the gamut from <b>classical</b> to <b>rock,</b> from <b>jazz</b> to <b>pop</b> to <b>folk</b> to <b>country. Movie music</b> and <b>video-game music</b> are particular specialties.</h6>
              <h6><b>Our guitar lessons are fun,</b> with a light-hearted approach puts you in in a better mindset to learn. All students of all ages and all levels of experience are welcome.</h6>
              <h6><b>Our music lessons are flexible,</b> with schedules and instruction much more individualized than you’ll find at a typical music academy. <b>We teach both kids and adults.</b></h6>
              <h6><b>We will teach you what you want to play, how you want to play it.</b></h6>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
              <?php include '../landingpage-contactform.php'; ?>
              <br>
            </div>
        </div>
        <!-- /.row -->
        <!-- Footer -->
        <footer class="col-md-12">
          <section class="row">
            <article class="footer-logo pull first">
              <h1>206 <span class="subtext-dark">tutoring</span></h1>
              <h3>&copy;206 Tutoring</h3>
            </article>
            <article class="footer-contact push info-megablock">
              <h3>(206) 551-7843</h3>
              <h3>contact@206tutoring.com</h3>
            </article>
          </section>
        </footer>
      </div>
    	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>		
	<script type="text/javascript">
	$(function() {
		// Insert Responsive Sidebar Icon
		$('<div class="responsive-nav-icon" />').appendTo('.top-nav.row');
		$('<div class="responsive-nav-close" />').appendTo('nav');

		// Navigation Slide In
		$('.responsive-nav-icon').click(function() {
			$('nav').addClass('slide-in');
			$('html').css("overflow", "hidden");
			$('#overlay').show();
			return false;
		});

		// Navigation Slide Out
		$('#overlay, .responsive-nav-close').click(function() {
			$('nav').removeClass('slide-in');
			$('html').css("overflow", "auto");
			$('#overlay').hide();
			return false;
		});
	});
	</script>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
