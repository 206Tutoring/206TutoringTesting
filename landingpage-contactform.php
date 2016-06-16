<section>
		<a name="lp-contact-form"></a>
		<article>
			<?php 
				if (isset($_REQUEST['submitted'])) {
				// Initialize error array.
				  $errors = array();
				  // Check for a proper First name
				  if (!empty($_REQUEST['name'])) {
				  $name = $_REQUEST['name'];
				  $pattern = "/.{1,25}/";// This is a regular expression that checks if the name is valid characters
				  if (preg_match($pattern,$name)){ $name = $_REQUEST['name'];}
				  else{ $errors[] = 'Your Name should only contain letters and be 1-25 long.';}
				  } else {$name = 'No name entered.';}
				  
				  //Check for a valid email
				  if (!empty($_REQUEST['email'])) {
				  $email = $_REQUEST['email'];
				  $pattern = "/.{1,40}/";
				  if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
				  else{ $errors[] = 'Your email was not formatted correctly.';}
				  } else {$email = 'No email entered.';}

				  //Check for a valid phone number
				  if (!empty($_REQUEST['phone'])) {
				  $phone = $_REQUEST['phone'];
				  $pattern = "/[0-9]/";
				  if (preg_match($pattern,$phone)){ $phone = $_REQUEST['phone'];}
				  else{ $errors[] = 'Your Phone number can only be numbers.';}
				  } else {$phone = 'No phone number entered.';}
				  
				  // Check for a message
				  if (!empty($_REQUEST['message'])) {
				  $message = $_REQUEST['message'];
				  $pattern = "/.{1,500}/";// This is a regular expression that checks if the message is valid characters
				  if (preg_match($pattern,$message)){ $message = $_REQUEST['message'];}
				  else{ $errors[] = 'Your message can only contain numbers, letters, standard punctuation, and be 1-500 characters long.';}
				  } else {$message = 'No message entered.';}
				  
				  }
				  //End of validation 
				  if (isset($_REQUEST['submitted'])) {
					  if (empty($errors)) { 
						  $from = "From: 206Tutoring landing page"; //Site name
						  // Change this to your email address you want to form sent to
						  $to = "garrettsand@gmail.com";
						  $subject = "Admin - 206Tutoring - CONTACT FORM: Message from " . $name . "";
						  
						  $body = "Message from " . $name . " ". "
						  Email: " . $email . " ". "
						  Phone: " . $phone . " ". "
						  Message: " . $message . ""; 
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
				  echo '</ul><h3 class="error">Your mail could not be sent due to input errors.</h3><hr />';}
				   else{echo '<hr /><h3 class="success" align="center">Thank you for your message!</h3><hr />'; 
				  }
				  }
				//End of errors array
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
			</section>
		
