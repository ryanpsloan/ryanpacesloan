<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Payment</title>
    <link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script type="text/javascript">
        //Stripe.setPublishableKey('pk_live_GaUAeZIimAN1U7bD0rpvqfVN');
    </script>
    <script>
        $(document).ready(function(){
            var input = $("input[type='number']");
            $("button[class='stripe-button-el']").prop('disabled', true);
            input.change(function(){
                $("button[class='stripe-button-el']").prop('disabled', false);
                input.validate({
                    debug: true,
                    rules: {
                        amount: {
                            required: true,

                            messages: {
                                required: "Required Input"

                            }
                        }
                    },
                    success: function(element){
                        alert("A");

                    }

                });
            });
        });
    </script>
    <style>
        table td{
            padding: 3px;
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
                <a class="navbar-brand" href="../index.php"><span class="glyphicon glyphicon-star"
                                                                  aria-hidden="true"></span>Ryan Pace Sloan</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="disabled"></li>
                    <li class="active"></li>
                    <li><a href="#"></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<main>
<div id="payment-errors"></div>

<!-- get amount & description from the tickets created -->
<form action="charge.php" method="POST">
<table>
    <tr><td><label for="amount">Amount to Pay $</label></td><td><input type="number" name="amount" id="amount"></td>
        <td>

                <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_live_GaUAeZIimAN1U7bD0rpvqfVN"
                    data-amount= ""
                    data-name="Ryan Pace Sloan"
                    data-description="Website"
                    data-image="images/ryanpaceformal.jpg">
                </script>

        </td>
    </tr>
</table>
</form>
<div>
    <?php isset($_GET['output']) ? $_GET['output'] : "" ?>
</div>
</main>
</body>
</html>