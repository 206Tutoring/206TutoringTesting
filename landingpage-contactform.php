<?php
session_start();
require 'vendor/autoload.php';
$course = $_SESSION['myValue'];
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form class="lp-contact-form"  action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action" value="submit">
    Name:<br>
    <input name="name" type="text" value="" size="30"/><br>
    Email:<br>
    <input name="email" type="text" value="" size="30"/><br>
    Phone number:<br>
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
      $subject="Student interested in $course";
    $sendgrid = new SendGrid($_ENV['SENDGRID_USERNAME'], $_ENV['SENDGRID_PASSWORD']);

    $mail = new SendGrid\Email();
    $mail->addTo('itscml@gmail.com')
      ->addTo('rdmcabee@hotmail.com')
      ->setFrom($email)
      ->setSubject($subject)
      ->setText($message . " " . $phonenumber);
    $sendgrid->send($mail);
    ?>
    <script type="text/javascript">
    window.location = "/contact-confirmation.php";
    </script>
    <?php
  }
}
?>
