<?php
require_once('stripe-php/init.php');

$stripe = array(
  "secret_key"      => "sk_test_01esljLaB7KSmUgIrfLaDIEf",
  "publishable_key" => "pk_test_b8fA0hpuMhbmKnGYlMHpkhw4"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
