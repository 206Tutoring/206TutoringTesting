<?php
require __DIR__ . '/vendor/autoload.php';

$stripe = array(
  "secret_key"      => $_ENV["STRIPE_SECRET_KEY"],
  "publishable_key" => $_ENV["STRIPE_PUBLISHABLE_KEY"]
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
