<!DOCTYPE html>
<html lang="en">
<head>
  <!-- TODO: Change routes to correct location when in production -->
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="publisher" content="James Hoover"/>
  <!-- LINK stylesheets -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="/stylesheets/abc-reset.css">
  <link rel="stylesheet" type="text/css" href="/stylesheets/style.css">
  <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>206Tutoring - Home</title>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48216177-1', 'auto');
  ga('send', 'pageview');

  </script>
</head>
<!-- START BODY -->
<body>
  <!-- START HEADER -->
<header class="home-header">
  <div class="full-row gradient">
    <section class="top-nav row">
      <div>
        <a href="/home.php" class="nav-logo pull first">
          <img src="/assets/home_page/spaceneedlelogo.png" alt="SpaceNeedle" class="spaceneedle-logo">
        </a>
      </div>
      <div class="nav-badge nav-btn one-fifth push">
        <a href="/about.php#contact-form" class="btn-orange btn-contact">CONTACT US</a>
        <div class="phone-numb">
          <p>(206) 551-7843</p>
        </div>
      </div>
      <!-- START NAV -->
      <nav>
        <ul class="nav-link-list">
          <li><a href="/test_prep.php" class="nav-link">TEST & COLLEGE PREP</a></li>
          <li><a href="/tutoring.html" class="nav-link">TUTORING</a></li>
          <li><a href="/music.html" class="nav-link">MUSIC LESSONS</a></li>
          <li><a href="/about.php" class="nav-link">ABOUT</a></li>
          <li><a href="/payment.php" class="nav-link">PAYMENT</a></li>
        </ul>
        <section>
          <div class="pull">
            <a href="http://www.seattletimes.com/education-lab/guest-essay-how-many-good-high-schools-can-be-so-bad/" class="nav-link">
              <img src="/assets/home_page/seattletimes.png" alt="SeattleTimes" class="seattletimes-logo">
              <br>Guest essay: <br>How ‘good’ high schools can be so bad<br>
            </a>
          </div>
          <div class="push">
            <a href="https://www.thumbtack.com/wa/seattle/test-prep/tutoring-piano-lessons" class="nav-link">
              <img src="/assets/about/ThumbtackBadge.png" alt="Thumbtack" class="thumbtack-logo">
              <br>5 stars on Thumbtack — <br>Best of 2015<br>
            </a>
          </div>
        </section>
      </nav>
    </section>
    <div>
      <span>
        <main class="header-text row">
          <div>
            <h1>PAYMENT</h1>
          </div>
        </main>
      </span>
    </div>
  </div>
</header>
   <div class="center payment-container">
      <div class="center">
        <h1>Set up payments with our secure payment portal.</h1>
      </div>
      <?php require_once('./config.php'); ?>
      <form action="charge.php" method="post">
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-name="Two Lessons"
          data-description="Pay for two lessons at $25/hour"
          data-amount="5000"
          data-locale="auto"
          >
        </script>
      </form>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
