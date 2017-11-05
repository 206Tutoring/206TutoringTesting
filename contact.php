<?php
require_once './vendor/autoload.php';

$helperLoader = new SplClassLoader('Helpers', './vendor');
$mailLoader   = new SplClassLoader('SimpleMail', './vendor');

$helperLoader->register();
$mailLoader->register();

use Helpers\Config;
use SimpleMail\SimpleMail;

$config = new Config;
$config->load('./config/config.php');
echo "<script>console.log('Before if')</script>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = stripslashes(trim($_POST['form-name']));
    $email   = stripslashes(trim($_POST['form-email']));
    $phone   = stripslashes(trim($_POST['form-phone']));
    $subject = stripslashes(trim($_POST['form-subject']));
    $message = stripslashes(trim($_POST['form-message']));
    $pattern = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';

    if (preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $subject)) {
        die("Header injection detected");
    }

    $emailIsValid = filter_var($email, FILTER_VALIDATE_EMAIL);

    if ($name && $email && $emailIsValid && $subject && $message) {
        $mail = new SimpleMail();

        $mail->setTo($config->get('emails.to'));
        $mail->setFrom($config->get('emails.from'));
        $mail->setSender($name);
        $mail->setSenderEmail($email);
        $mail->setSubject($config->get('subject.prefix') . ' ' . $subject);

        $body = "{$subject}
                {$config->get('fields.name')}:{$name}
                {$config->get('fields.email')}: {$email}
                {$config->get('fields.phone')}:{$phone}
                {$config->get('fields.message')}:{$message}";
        $EmailFrom = $config->get('emails.from');
        $mail->setHtml($body);
        // $mail->send();
        mail($config->get('emails.to'), $config->get('subject.prefix') . ' ' . $subject, $body, "From: <$EmailFrom>");
        $emailSent = true;
    } else {
        $hasError = true;
    }
}
?><!DOCTYPE html>
<html>
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
            </br>
            </br>
            <h2 class="contact-address">1512 Summit Ave #304</h2>
            <h2 class="contact-address">Seattle, WA 98122</h2   >
            <h2 class="contact-address">(206) 551-7843</h2  >
        </article>

       <article class="address3">
          <h2 class="contact-address">7711 14th Ave NE</h2>
          <h2 class="contact-address">Seattle, WA 98115</h2>
          <h2 class="contact-address">(206) 551-7843</h2>
        </article>

        <a href="https://www.google.com/maps/place/1512+Summit+Ave+%23304,+Seattle,+WA+98122/@47.6145694,-122.3266819,16z/data=!4m5!3m4!1s0x54906acb14d17daf:0xd0c1ef34305fd942!8m2!3d47.6145658!4d-122.3252174">           
          <img class="center-block" src="/assets/contact/mapboth.jpg" alt="find us on the map">
        </a>

     </article>

    <section class="one-half">
        
        <article class="address2">
            <h2 class="prominent">Get in touch</h2>
            <br>
            <?php if(!empty($emailSent)): ?>
              <div class="col-md-6 col-md-offset-3">
                <div class="alert alert-success text-center"><?php echo $config->get('messages.success'); ?></div>
              </div>
            <?php else: ?>
            <?php if(!empty($hasError)): ?>
            <div class="col-md-5 col-md-offset-4">
              <div class="alert alert-danger text-center"><?php echo $config->get('messages.error'); ?></div>
            </div>
            <?php endif; ?>


            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="lp-contact-form" method="post">
              <input type="hidden" name="action" value="submit" required/>
              Name:<br>
              <input type="text" id="form-name" name="form-name" required/><br>
              Email Address:<br>
              <input type="email" id="form-email" name="form-email" required/><br>
              Phone number:<br>
              <input type="tel" id="form-phone" name="form-phone" required/><br>
              Subject:<br>
              <input type="text" id="form-subject" name="form-subject" required/><br>
              How can we help you?:<br>
              <textarea rows="3" id="form-message" name="form-message" required></textarea><br>
              <input type="submit" class="btn btn-default"></input>
            </form>

            <!-- <div class="col-md-6 col-md-offset-3">
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" enctype="application/x-www-form-urlencoded" id="contact-form" class="lp-contact-form" method="post">
            <div class="form-group">
                <label for="form-name" class="col-lg-2 control-label"><?php echo $config->get('fields.name'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-name" name="form-name" placeholder="<?php echo $config->get('fields.name'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form-email" class="col-lg-2 control-label"><?php echo $config->get('fields.email'); ?></label>
                <div class="col-lg-10">
                    <input type="email" class="form-control" id="form-email" name="form-email" placeholder="<?php echo $config->get('fields.email'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form-phone" class="col-lg-2 control-label"><?php echo $config->get('fields.phone'); ?></label>
                <div class="col-lg-10">
                    <input type="tel" class="form-control" id="form-phone" name="form-phone" placeholder="<?php echo $config->get('fields.phone'); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="form-subject" class="col-lg-2 control-label"><?php echo $config->get('fields.subject'); ?></label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="form-subject" name="form-subject" placeholder="<?php echo $config->get('fields.subject'); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="form-message" class="col-lg-2 control-label"><?php echo $config->get('fields.message'); ?></label>
                <div class="col-lg-10">
                    <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="<?php echo $config->get('fields.message'); ?>" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button type="submit" class="btn btn-default"><?php echo $config->get('fields.btn-send'); ?></button>
                </div>
            </div>
        </form>
    </div> -->

    <?php endif; ?>
    </article>
   </section>
</section>
    
<?php include "footer.php"; ?>
    <script type="text/javascript" src="public/js/contact-form.js"></script>
    <script type="text/javascript">
        new ContactForm('#contact-form');
    </script>
</body>
</html>

