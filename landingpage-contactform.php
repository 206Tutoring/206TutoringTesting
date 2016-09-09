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
    $mail->addTo('contact@206tutoring.com')
      ->setFrom($email)
      ->setSubject('Sent from landing page contact form')
      ->setText($message . " " . $phonenumber);
    $sendgrid->send($mail);
    ?>

    <h1>Thank you for contacting 206 Tutoring! We'll be in touch shortly to talk more about your study goals.</h1>
    <br>
    <h1>Best, Chris Morris-Lent</h1>
    <h1>Director, 206 Tutoring and Music Lessons</h1>
    <h1>206-551-7843</h1>
    <!-- Google Code for Converted Form Conversion Page -->
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 971789382;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "oBi8CLeDhmoQxqixzwM";
    var google_remarketing_only = false;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/971789382/?label=oBi8CLeDhmoQxqixzwM&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
    <?php
  }
}
?>
