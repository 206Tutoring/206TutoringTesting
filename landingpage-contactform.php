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
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phonenumber=$_REQUEST['phonenumber'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($phonenumber=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your landing page contact form";
      $sendgrid = new SendGrid($_ENV['SENDGRID_USERNAME'], $_ENV['SENDGRID_PASSWORD']);

      $mail = new SendGrid\Email();
      $mail->addTo('contact@206tutoring.com')
        ->setFrom($email)
        ->setSubject('Sent from landing page contact form')
        ->setText($message . " " . $phonenumber);
      $sendgrid->send($mail);
	    }
    }  
?>
