<?php

require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey("sk_test_dwnEFDV6sFvgYB6vmbDJlJHX");

// Get the credit card details submitted by the form
$token = $_POST['stripeToken'];

// Create the charge on Stripe's servers - this will charge the user's card
try {
    $charge = \Stripe\Charge::create(array(
        "amount" => 1000, // amount in cents, again
        "currency" => "usd",
        "source" => $token,
        "description" => "Example charge"
    ));
} catch(\Stripe\Error\Card $e) {
    // The card has been declined
}












?>
<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Ryan Pace Sloan</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <style>
        body {

        }
        .panel-body{
            font-size: 1.7em;
            background-image: radial-gradient(#888888, #ffffff);

        }
        .btn-group-vertical{
            position: absolute;
            top: 15%;
            right: 2%;
        }
        .btn{
            padding: 1em;
            margin-top: .5em;
        }
        .icon-list{
            padding: 1em;
            margin-top: 1em;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="# "><span class="glyphicon glyphicon-cloud"
                                                        aria-hidden="true"></span> Ryan Pace Sloan</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li></li>
                    <li><a href="#"></a></li>
                    <li></li>
                    <li></li>
                    <li><form action="" method="POST">
                            <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_GbvEJe8uyD3WdzptAvnBUoC2"
                                data-amount="2000"
                                data-name="Demo Site"
                                data-description="2 widgets ($20.00)"
                                data-image="/128x128.png"
                                data-locale="auto">
                            </script>
                        </form></li>



                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="disabled"> </li>

                    <li></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<main>
    <article>

    </article>
</main>
<footer>

</footer>
</body>
</html>
