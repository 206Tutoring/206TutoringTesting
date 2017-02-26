
<?php
require_once('force_ssl.php');
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- TODO: Change routes to correct location when in production -->
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="publisher" content="James Hoover"/>
  <!-- LINK stylesheets -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/small-business.css" rel="stylesheet">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/stylesheets/abc-reset.css">
  <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">
  <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>206Tutoring - Payment</title>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48216177-1', 'auto');
  ga('send', 'pageview');

  </script>
  <style>
    .donate-process,
    .donate-thanks,
    .donate-alert {
      font-size: 1.2em;
      -webkit-transition: all .3s ease-out;
      -moz-transition: all .3s ease-out;
      -o-transition: all .3s ease-out;
      transition: all .3s ease-out;
      visibility: hidden;
      opacity: 0;
      height: 0;
      display: block;
    }
    .donate-process.show,
    .donate-thanks.show,
    .donate-alert.show {
      opacity: 1;
      height: auto;
      visibility: visible;
      padding: 1em;
    }
    .donate-alert.show {
      background: #f6cfcf;
    }
    .donate-thanks.show {
      background: #39d1b4;
      color: #fff;
    }
  </style>

</head>
<!-- START BODY -->
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  	  <div class="container-fluid">
  	    <!-- Brand and toggle get grouped for better mobile display -->
  	    <div class="navbar-header">
			
			
  	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
 	        
<span class="sr-only">Toggle navigation</span>
  	       MENU ☰
  	      </button>

  	      <!--<a class="navbar-brand" href="http://www.206tutoring.com">
  	<img src="../assets/home_page/spaceneedlelogosquaresmall.png" alt="SpaceNeedle">
  	</a>-->
  	    </div>
<a class="navbar-text">Guaranteed Score Boost<br>New SAT +200 ACT +4</a>
  	    <!-- Collect the nav links, forms, and other content for toggling -->
  	    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
  	      <ul class="nav navbar-nav">
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tutoring Services<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
                          <a href="../test_prep.php">Test and College Prep</a>
                      </li>
             <li>
                          <a href="../tutoring.html">Academic Tutoring</a>
                      </li>
            <li>
                          <a href="../music.html">Music Lessons</a>
                      </li>
           
          </ul>
        </li>
  	        
			
                     
                        <li><a href="/groupclasses.html" class="nav-link">Group Classes</a></li>
                      

                      <li>
                          <a href="../about.php">About</a>
                      </li>
<li>
                        <a href="../instructors.html">Instructors</a>
                    </li>
                      <li>
                          <a href="../payment.php">Payment</a>
                      </li>

  	          </ul>
  	        </li>
  	      </ul>
<ul class="nav navbar-right">
		                      <li><a href="../contact.php#contact-form" class="btn-orange btn-contact">Contact Us</a></li>
		                    </ul>	      
	     
  	    </div><!-- /.navbar-collapse -->
  	  </div><!-- /.container-fluid -->
  	</nav>
  <!-- START HEADER -->
<header class="home-header master-header payment-header">
  <div class="full-row gradient">
    <section class="top-nav row">
      <a href="/home.php" class="nav-logo pull first">
        <img src="/assets/home_page/spaceneedlelogo.png" alt="SpaceNeedle" class="spaceneedle-logo"></a>
<span>
        <main class="header-text row">
          <div>
<br>
            <h1>PAYMENT</h1>
          </div>
        </main>
      </span>

         </section>
      </div>
</header>

<body>
  <div class="col-md-3">
    <br>
  </div>
  <div class="col-md-6">

    <div id="main" role="main">

      <section class="payment-button">

        <span class="donate-alert" aria-expanded="false"></span>
        <span class="donate-process" aria-expanded="false">processing your payment...</span>
        <span class="donate-thanks" aria-expanded="false"></span>
          <br>
          <br>
          <h2><b>Pay for lessons in advance with our secure payment portal using <a href="https://stripe.com">Stripe</a>—convenient and secure.</b></h2>
          <br>
          <br>
        $ <input type="text" id="amt" value="">
        <button id="donateNow" type="submit">Pay</button>
      </section>

    </div>

  </div>
  <div class="col-md-3">
    <br>
  </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://checkout.stripe.com/checkout.js"></script>

<script>
$(document).ready(function(){
  // scroll to top for processing
  function scrollTo() {
    var hash = '#main';
    var destination = $(hash).offset().top;
    stopAnimatedScroll();
    $('html, body').stop().animate({
      scrollTop: destination
    }, 400, function() { window.location.hash = hash; });
    return false;
  }
  function stopAnimatedScroll(){
    if ( $('*:animated').length > 0 ) {$('*:animated').stop();}
  }
  if(window.addEventListener) {
    document.addEventListener('DOMMouseScroll', stopAnimatedScroll, false);
  }
  document.onmousewheel = stopAnimatedScroll;

  // prevent decimal in donation input
  $('#amt').keypress(function(){
    preventDot(event)
  });

  function preventDot(event){
    var key = event.charCode ? event.charCode : event.keyCode;  
    if (key == 46){
      event.preventDefault();
      return false;
    }
  }

  function showProcessing() {
    scrollTo();
    $('.donate-process').addClass('show').attr('aria-expanded', 'true');
    $('.donate-thanks, .donate-alert').removeClass('show').attr('aria-expanded', 'false');
  }

  function hideProcessing() {
    $('.donate-process').removeClass('show').attr('aria-expanded', 'false');
  }

  // set up Stripe config, ajax post to charge
  var handler = StripeCheckout.configure({
    key: '<?php echo $stripe['publishable_key'] ?>',
    image: '/assets/home_page/spaceneedlelogo.jpg',
    closed: function(){document.getElementById('donateNow').removeAttribute('disabled');},
    token: function(token) {
      $.ajax({
        url: '/charge.php',
        type: 'POST',
        dataType: 'json',
        beforeSend: showProcessing,
        data: {
          stripeToken: token.id,
          stripeEmail: token.email,
          donationAmt: donationAmt
        },
        success: function(data) {
          hideProcessing();
          $('#amt').val('');
          if (data.error!='') {
            $('.donate-alert').addClass('show').text(data.error).attr('aria-expanded', 'true');
          } else {
            $('.donate-thanks').addClass('show').text(data.success).attr('aria-expanded', 'true');
          }
        },
        error: function(data) {
          $('.donate-alert').show().text(data).attr('aria-expanded', 'true');
        }
      });
    }
  });

  // donate now button, open Checkout
  $('#donateNow').click(function(e) {
    // strip non-numbers from amount and convert to cents
    donationAmt = document.getElementById('amt').value.replace(/\D/g,'') + '00';
    // make sure there is an amount
    if (donationAmt < 1) {
      $('#amt').val('').focus();
      e.preventDefault();
    } else {
      $('#donateNow').attr('disabled', 'disabled');
      // Open Checkout
      handler.open({
        name: '206 Tutoring',
        description: 'Payment',
        amount: donationAmt,
        billingAddress: true
      });
      e.preventDefault();
    }
  });

  // Close Checkout on page navigation
  $(window).on('popstate', function() {
    handler.close();
  });
});
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include 'footer.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script>
    $(document).ready(function(){
      $('.slick-slider').slick({
          infinite: true,
          speed: 1000,
          arrows: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 7000,
          pauseOnHover: false
      });
    }); 
  </script> 
  

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body><!-- END BODY -->
