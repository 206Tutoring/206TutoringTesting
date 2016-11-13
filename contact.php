<!DOCTYPE html>
<html lang="en">
<head>
	<!-- TODO: Change routes to correct location when in production -->
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="publisher" content="James Hoover"/>
	<!-- LINK stylesheets -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/stylesheets/abc-reset.css">
	<link rel="stylesheet" type="text/css" href="/stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<title>206Tutoring - Contact Us</title>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48216177-1', 'auto');
  ga('send', 'pageview');

	</script>
</head>
<body>
	<?php include 'header.php'; ?>
	<section class="home-info row">
		<article class="info-block one-half first">
				
	
			<article class="address2">
				<h2 class="prominent">206 Tutoring and Music Lessons</h2>
				<h2>1512 Summit Ave #304</h2>
				<h2>Seattle, WA 98122</h2	>
				<h2>(206) 551-7843</h2	>
			</article>
<a href="https://www.google.com/maps/place/3920+Stone+Way+N+%23409,+Seattle,+WA+98103/@47.6547819,-122.3490841,15z/data=!4m5!3m4!1s0x5490145562eefa41:0x217dff24f3468d93!8m2!3d47.654794!4d-122.342066">			
<img class="center-block" src="/assets/contact/map.jpg" alt="find us on the map">
		</a>
		</article>


<section class="about-content one-third">
		<a name="contact-form"></a>
		<article class="about-article get-intouch">
			<h1>Get in touch</h1>
			<?php
      require 'vendor/autoload.php';

      $action=$_REQUEST['action'];
      if ($action=="")    /* display the contact form */
          {
          ?>
          <form class="lp-contact-form"  action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="submit">
          Your name:<br>
          <input name="name" type="text" value="" size="30"/><br>
          Your email:<br>
          <input name="email" type="text" value="" size="30"/><br>
          Your phone number:<br>
          <input name="phonenumber" type="text" value="" size="30"/><br>
          How can we help you?:<br>
          <textarea name="message" rows="7" cols="30"></textarea><br>
          <input type="submit" value="Send email"/>
          </form>
          <?php
          } 
      else {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phonenumber=$_REQUEST['phonenumber'];
        $message=$_REQUEST['message'];

        if (($name=="")||($email=="")||($phonenumber=="")||($message=="")) {
          echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        } else {		
          $from="From: $name<$email>\r\nReturn-path: $email";
            $subject="Message sent using your landing page contact form";
          $sendgrid = new SendGrid($_ENV['SENDGRID_USERNAME'], $_ENV['SENDGRID_PASSWORD']);

          $mail = new SendGrid\Email();
          $mail->addTo('itscml@gmail.com')
            ->setFrom($email)
            ->setSubject('Sent from about page contact form')
            ->setText($message . " " . $phonenumber);
          $sendgrid->send($mail);
          ?>
          <p>Thank you for your message!</p>
          <?php
        }
      }
      ?>
        
		</article>
	</section>
	</section>
	<!-- START FOOTER -->
  <?php include "footer.php"; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>		
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
</body><!-- END BODY -->

