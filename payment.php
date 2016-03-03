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
        <a href="/home.php" class="nav-logo pull first" title="Home">206 <span class="subtext-light">tutoring</span></a>
        <div class="nav-badge nav-btn one-fifth push">
          <a href="/about.php#contact-form" class="btn-orange btn-contact">CONTACT US</a>
          <span class="phone-nmb">(206) 551-7843</span>
          <a href="https://www.thumbtack.com/wa/seattle/test-prep/tutoring-piano-lessons" class="nav-link">
            <img src="/assets/about/ThumbtackBadge.png" alt="Thumbtack" class="thumbtack-logo">
            <br>5 stars on Thumbtack — Best of 2015
          </a>
          <div></div>
          <a href="http://www.seattletimes.com/education-lab/guest-essay-how-many-good-high-schools-can-be-so-bad/" class="nav-link">
            <img src="/assets/home_page/seattletimes.jpg" alt="SeattleTimes" class="thumbtack-logo">
            <br>Guest essay: How ‘good’ high schools can be so bad
          </a>
        </div>
        <!-- START NAV -->
        <nav>
          <ul class="nav-link-list">
            <li><a href="/test_prep.html" class="nav-link">TEST & COLLEGE PREP</a></li>
            <li><a href="/tutoring.html" class="nav-link">TUTORING</a></li>
            <li><a href="/music.html" class="nav-link">MUSIC LESSONS</a></li>
            <li><a href="/about.php" class="nav-link">ABOUT</a></li>
            <li><a href="/payment.php" class="nav-link">PAYMENT</a></li>
          </ul>
        </nav>
      </section>
    </div>
    <main class="header-text row">
      <h1>PAYMENT</h1>
      <!-- <h2>experienced, effective, empowering</h2>
      <a href="/about.php#contact-form" class="btn-orange">Contact Us Now</a> -->
    </main>
  </header><!-- END HEADER -->
  <section class="home-about full-row">
    <section class="row">
      <div class="home-portrait two-fifths first">
        <?php require_once('./config.php'); ?>

        <form action="charge.php" method="post">
          <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                  data-key="<?php echo $stripe['publishable_key']; ?>"
                  data-description="Access for a year"
                  data-amount="5000"
                  data-locale="auto"></script>
        </form>
      </div>
      <div class="three-fifths">
        <p>Set up payments with our secure payment portal.</p>
      </div>
    </section>
  </section>  
  <section class="home-info row">
    <article class="info-block one-third first">
      <a href="/test_prep.html">
        <img src="/assets/home_page/home_test_prep_sqr.png" alt="test_prep">
        <h1>Test Preparation & College Planning</h1>
      </a>
      <p>The best tutors and college planners in the Seattle metropolitan area. We’ll help you get the score you want on the SAT, ACT, or GRE by using the information on the test itself to your advantage. Alongside our college counseling program, you’ll have the essays, scores, and résumé you need to maximize your chances at your dream school.</p>
    </article>
    <article class="info-block one-third">
      <a href="/tutoring.html">
        <img src="/assets/home_page/home_tutor_sqr.png" alt="tutor">
        <h1>K-12 Tutoring</h1><br>
      </a>
      <p>On-demand and regularly scheduled help with math, reading, and writing. Elementary school, high school, and college. Homework, tests, and more. Take all the academic pressure off. Let us help make school a place for not stress and anxiety, but discovery and growth.</p>
    </article>
    <article class="info-block one-third">
      <a href="/music.html">
        <img src="/assets/home_page/home_piano_sqr.png" alt="piano">
        <h1>Music Lessons</h1><br>
      </a>
      <p>Our team of experienced, professional performers and instructors offers lessons in piano, voice, guitar, violin, viola, cello, drums, and more. Lessons are fun with flexible schedules and learning plans—we’ll help you learn to play what you want to play, how you want to play it.</p>
    </article>
  </section>
  <section class="quote-slider full-row">
    <div class="slick-slider">
      <div class="a-slide">
        <article class="quote">
          <h1>"Chris was willing to take me on as a long-term project. My SAT score was lagging behind all my other academic achievements. Over the course of three months Chris taught me many concepts and gave me ways I could teach myself to improve in between lessons. My score went up by 400 points. Thanks so much, Chris!"</h1>
          <h2>Sofia R., Bellevue</h2>
        </article>
      </div>
      <div class="a-slide">
        <article class="quote">
          <h1>"Jonas is an excellent, flexible, amusing, entertaining, and effective piano teacher. My old teacher barely talked about technique at all, I’ve gotten much better since starting with Jonas. Especially recommended if you want to improve quickly."</h1>
          <h2>Donald P., Green Lake</h2>
        </article>
      </div>
      <div class="a-slide">
        <article class="quote">
          <h1>"I knew I couldn’t study for the GRE by myself as soon as I saw the first page of math questions. Jason makes dusting off a decade of math a matter of a little study; one of my classmates even helped me out, too, and I’m now a grad student in a field I’m passionate about."</h1>
          <h2>Ron W., Fremont</h2>
        </article>
      </div>
      <div class="a-slide">
        <article class="quote">
          <h1>"Allion knows what he’s doing. He quickly figured out exactly what needed work with my piano technique and came up with a lesson plan for drilling into the right habits. After a couple of months, I already am playing much more correctly, and better than ever before!"</h1>
          <h2>Matt J., First Hill</h2>
        </article>
      </div>
      <div class="a-slide">
        <article class="quote">
          <h1>"Alex is a wonderful tutor for our kids (8, 12, and 15), very age-appropriate with his lesson plans."</h1>
          <h2>Ross R., Redmond</h2>
        </article>
      </div>
      <div class="a-slide">
        <article class="quote">
          <h1>“Chris is a great teacher. I didn’t know that test prep could be fun. I also didn’t expect to use the skills outside the SAT.”</h1>
          <h2>Rajat S., Redmond</h2>
        </article>
      </div>
      <div class="a-slide">
        <article class="quote">
          <h1>“Guitar lessons with John are a blast, I’ve been playing for only six months and I’m completely obsessed, gearing up for my first concert.”</h1>
          <h2>Jimmy W., Seattle</h2>
        </article>
      </div>
    </div>
  </section>
  <section class="home-about full-row">
    <section class="row">
      <div class="home-portrait one-fifth first">
        <img src="/assets/home_page/home_profile_pic.png" alt="CML Portrait">
      </div>
      <div class="four-fifths">
        <p>Hello! My name is Chris Morris-Lent. I’m the founder of 206 Tutoring and Music Lessons. We provide the highest quality of instruction, through hiring only the most qualified instructors, and matching our students with the best possible fit. For more information, sign up for my blog below, or spend a few minutes exploring the website to get a feel for what we can offer you.</p>
      </div>
    </section>
  </section>
  <section class="home-consultation row">
    <section class="consultation-icons">
      <img src="/assets/home_page/home_lesson_option_in_person_icon.png" alt="lesson_option_in_person">
      <img src="/assets/home_page/home_lesson_option_online_icon.png" alt="lesson_option_online">
    </section>
      <h1>Lessons are available in person or online</h1>
      <h2>Unsure about the best option for you? Contact us now for a free 15-minute consultation. We’ll help you figure out the right plan.</h2>
      <a href="/about.php#contact-form" class="btn-orange">CONTACT US NOW</a>
  </section>
  <section class="schedule-block full-row">
    <h1>Want to learn more great ways to learn?</h1>
    <h2>Sign up for my blog and get regular tips and tricks on how to improve your learning.</h2>
      <?php 
        if (isset($_REQUEST['submitted'])) {
        // Initialize error array.
          $errors = array();
          // Check for a proper First name
          if (!empty($_REQUEST['name'])) {
          $name = $_REQUEST['name'];
          $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
          if (preg_match($pattern,$name)){ $name = $_REQUEST['name'];}
          else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-25 long.';}
          } else {$errors[] = 'You forgot to enter your Name.';}
          
          //Check for a valid email
          if (!empty($_REQUEST['email'])) {
          $email = $_REQUEST['email'];
          $pattern = "/^[a-zA-Z0-9\_.@]{6,40}/";
          if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
          else{ $errors[] = 'Your email was not formatted corretly.';}
          } else {$errors[] = 'You forgot to enter your email.';}

          }
          //End of validation 
          if (isset($_REQUEST['submitted'])) {
            if (empty($errors)) { 
              $from = "From: 206Tutoring"; //Site name
              // Change this to your email address you want to form sent to
              $to = "itscml@gmail.com";
              $subject = "Admin - 206Tutoring - SIGNUP FORM for: " . $name . "";
              
              $body = "Blog signup for: " . $name . " ". "
              Email: " . $email . "
              ";
              mail($to,$subject,$body,$from);
            }
          }
        ?>
        <?php 
          //Print Errors
          if (isset($_REQUEST['submitted'])) {
          // Print any error messages. 
          if (!empty($errors)) { 
          echo '<hr /><h3 class="error">The following occurred:</h3><ul>'; 
          // Print each error. 
          foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
          echo '</ul><h3 class="error">Your name could not be sent due to input errors.</h3><hr />';}
           else{echo '<hr /><h3 class="success" align="center">Thank you! You are now signed up!</h3><hr />'; 
          }
          }
        //End of errors array
      ?>
    <section class="home-signup-form">
      <form action="" method="post" class="home-signup row">
        <input name="name" type="text" value="" placeholder="Name..." class="input-box one-third first"/>
        <input name="email" type="email" value="" placeholder="Email..." class="input-box one-third"/>
        <input name="submitted" type="submit" value="SIGN ME UP" class="btn-orange one-third btn-submit"/>
      </form>
    </section>
  </section>
  <!-- START FOOTER -->
  <footer>
    <section class="row">
      <article class="footer-logo pull first">
        <h1>206 <span class="subtext-dark">tutoring</span></h1>
        <h3>&copy;206 Tutoring</h3>
      </article>
      <article class="footer-contact push">
        <h3>(206) 551-7843</h3>
        <h3>chris@206tutoring.com</h3>
      </article>
    </section>
  </footer><!-- END FOOTER -->
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
