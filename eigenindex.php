<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ACT-Coach</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/small-business.css" rel="stylesheet">

    <!-- Old stylesheets we still need -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sand:400,600,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="type/css" href="/stylesheets/abc-reset.css">
    <link rel="stylesheet" type="type/css" href="/stylesheets/style.css">
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
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                    <img src="../assets/home_page/spaceneedlelogo.png" alt="SpaceNeedle">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Test and College</a>
                    </li>
                    <li>
                        <a href="#">Tutoring</a>
                    </li>
                      
                    <li>
                        <a href="#">Music Lessons</a>
                    </li>

                    <li>
                        <a href="#">About</a>
                    </li>

                    <li>
                        <a href="#">Payment</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                  <h1>SEATTLE CALCULUS TUTORING</h1>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4">
              <img src="../assets/landingpages/seattlecalculustutoringsmall.png">
            </div>
            <div class="col-md-4">
                <p>blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah </p>
                <br>
                <p>  blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah  </p>
                <br>
                <p> blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah </p>
            </div>
            <!-- /.col-md-4 -->
            <div>
            <?php
            $action=$_REQUEST['action'];
            if ($action=="")    /* display the contact form */
                {
                ?>
                <form  action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="submit">
                Your name:<br>
                <input name="name" type="text" value="" size="30"/><br>
                Your email:<br>
                <input name="email" type="text" value="" size="30"/><br>
                Your phone number:<br>
                <input name="phonenumber" type="text" value="" size="30"/><br>
                How can we help you?<br>
                <textarea name="message" rows="7" cols="30"></textarea><br>
                <input type="submit" value="Send email"/>
                </form>
                <?php
                } 
            else                /* send the submitted data */
                {
                $name=$_REQUEST['name'];
                $email=$_REQUEST['email'];
                $message=$_REQUEST['message'];
            ?>
                        <!-- /.col-md-4 -->
          </div>
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
          <section class="row">
            <article class="footer-logo pull first">
              <h1>206 <span class="subtext-dark">tutoring</span></h1>
              <h3>&copy;206 Tutoring<h3>
            </article>
            <article class="footer-contact push info-megablock">
              <h3>(206) 551-7843</h3>
              <h3>contacting@206tutoring.com</h3>
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
