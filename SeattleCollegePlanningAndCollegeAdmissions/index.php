<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Seattle College Planning and College Admissions</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/small-business.css" rel="stylesheet">

    <!-- Old stylesheets we still need -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" type="text/css" href="../stylesheets/abc-reset.css">
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
                <a class="navbar-brand" href="#">
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

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                  <h1>"                      "</h1>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div>
            <div class="col-md-4">
              <br>
              <img src="../SeattleCollegePlanningAndCollegeAdmissions/seattlecollegeplanningandcollegeadmissions.png" class="img-responsive" alt="Responsive image">
            </div>
            <div class="col-md-4">
              <br>
              <h1>SEATTLE COLLEGE PLANNING AND COLLEGE ADMISSIONS</h1>
              <br>
              <p>The college-admissions process is intimidating if you’ve never done it before. We have! Let us help you. 206 Tutoring’s college counseling services offer pragmatic and decisive solutions to an increasingly competitive procedure.</p>
              <p>We will help you:</p>
                  <p>—Identify and apply to a range of colleges you’d be happy to attend</p>
                  <p>—Optimize standardized-test scores and GPAs</p>
                  <p>—Write the best possible college essays</p>
                  <p>—Find and win scholarships and opportunities for financial aid</p>
              <br>
              <p>We have the following qualifications:</p>
                  <p>—Admission to Ivies and prestigious liberal-arts colleges</p>
                  <p>—Experience with broader demographics than other private agencies</p>
                  <p>—Familiarity with the demands of the modern application process</p>
                  <p>—Youth and experience: as millennials, we know what colleges are like from firsthand experience, not admissions brochures or officers</p>        
                  <p>—Comprehensive knowledge of colleges and how they fit with personality types</p>
                  <p>—Extensive experience editing essays from published writers with exceptional skills</p>
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-4">
              <br>
              <?php include '../landingpage-contactform.php'; ?>
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
