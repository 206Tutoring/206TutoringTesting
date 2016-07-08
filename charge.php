<?php
  require_once('vendor/autoload.php');
  require_once('config.php');

  // set up messaging
  $error = '';
  $success = '';

  if ($_POST) {
    // Get the credit card and customer interaction details submitted by the form
    $token = $_POST['stripeToken'];
    $custemail = $_POST['stripeEmail'];
    $donation = $_POST['donationAmt'];

    // Create the customer
    $customer = \Stripe\Customer::create(array(
      "source" => $token,
      "description" => $custemail,
      "email" => $custemail
    ));

    // Create the charge on Stripe's servers - this will charge the user's card
    try {
      $charge = \Stripe\Charge::create(array(
        "amount" => $donation,
        "currency" => "usd",
        "customer" => $customer->id,
        "receipt_email" => $custemail,
        "description" => "206tutoring Payment - $custemail"
      ));
      $success = 'Your payment was successful.';
    } catch(\Stripe\Error\Card $e) {
      // The card has been declined from some reason
      $error = $e->getMessage();
    }

    // send back messaging json
    $arr = array(
      'success'=>$success,
      'error'=>$error
    );

    $amountInDollars = $donation / 100.0;

    // send customer an email receipt
    $sendgrid = new SendGrid($_ENV['SENDGRID_USERNAME'], $_ENV['SENDGRID_PASSWORD']);
    $receipt = new SendGrid\Email();
    $body = <<<EOD
We received your payment of $$amountInDollars for 206 Tutoring.

Thank you!

Sincerely,

Christopher Morris-Lent, Founder
EOD;

    $receipt
      ->addTo($custemail)
      ->setFrom("contact@206tutoring.com")
      ->setSubject("Thanks for your payment")
      ->setText($body);

    $sendgrid->send($receipt);

    // send business admin a receipt
    $adminReceipt = new SendGrid\Email();
    $adminBody = <<<EOD
206 Tutoring received a payment of $$amountInDollars from $custemail.
EOD;
    
    $adminReceipt
      ->addTo("garrettsand@gmail.com")
      ->setFrom($custemail)
      ->setSubject("Payment received")
      ->setText($adminBody);

    $sendgrid->send($adminReceipt);

    echo json_encode($arr);
  }
?>
