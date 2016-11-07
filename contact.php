<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>A Nice &amp; Simple Contact Form</title>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
</head>

<body>

	<div id="page-wrap">

		<img src="images/title.gif" alt="A Nice &amp; Simple Contact Form" /><br /><br />
		
		<p>There are a million contact form examples on the web, why this one? Because it's SIMPLE, it's FREE, it WORKS, it's VALID, and it's primarily styled with CSS.</p>
		
		<p>If you are trying to contact CSS-Tricks, DO NOT USE THIS FORM. This is just an example, my real <a href="http://css-tricks.com/contact/">contact form is here</a>.</p>
		
		<p><a href="http://css-tricks.com/examples/NiceSimpleContactForm.zip">[DOWNLOAD THIS EXAMPLE]</a></p>
				
		<div id="contact-area">
			
			<form method="post" action="contactengine.php">
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name" />
				
				<label for="City">City:</label>
				<input type="text" name="City" id="City" />
	
				<label for="Email">Email:</label>
				<input type="text" name="Email" id="Email" />
				
				<label for="Message">Message:</label><br />
				<textarea name="Message" rows="20" cols="20" id="Message"></textarea>

				<input type="submit" name="submit" value="Submit" class="submit-button" />
			</form>
			
			<div style="clear: both;"></div>
			
			<p>Check out a <a href="http://css-tricks.com/examples/NiceSimpleContactForm2">version of this</a> with SPAM protection.</p>
		
		</div>
	
	</div>

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
    Your message:<br>
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
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{		
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
		mail("angelwood@me.com", $subject, $message, $from);
		echo "Email sent!";
	    }
    }  
?>
						
<section class="about-content half-row">
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


</body>

</html>


