<?php
// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account/apikeys
require_once("/var/www/html/composer/vendor/autoload.php");

\Stripe\Stripe::setApiKey("sk_live_34grRW9FGvo1c9d6OrPRzaEz");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];
$amount = (float) number_format($_POST['amount'] * 100,2);
var_dump($amount);
// Create the charge on Stripe's servers - this will charge the user's card
try {
    $charge = \Stripe\Charge::create(array(
        "amount" => $amount, // amount in cents, again
        "currency" => "usd",
        "source" => $token,
        "description" => "Example charge"
    ));
    header("Location: stripe.php?output='Payment Successful'");
} catch(\Stripe\Error\Card $e) {
    // The card has been declined
    header("Location: stripe.php?output='Payment Unsuccessful'");
}

?>