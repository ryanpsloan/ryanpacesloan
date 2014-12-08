<?php
if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['msgArea'])) {

	$name = filter_input(INPUT_GET,"name",FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
	$textArea = filter_input(INPUT_GET, 'message', FILTER_SANITIZE_STRING);
	$msg = "Name:		" . $name . "\n";
	$msg .= "E-mail: 	" . $email . "\n";
	$msg .= "Message  " . $textArea . "\n";

	$recepient = "ryan@ryanpacesloan.com";
	$subject = "You have a message from someone at ryanpacesloan.com";
	$mailheaders = "From: RPS <ryan@ryanpacesloan.com> \n";
	$mailheaders .= "Reply-To: " . $_GET['email'];

	if(mail($recepient, $subject, $msg, $mailheaders)===false){
		$output = "<p style=\"color: white; margin-left: 50px; font-size: 40px;\">Mail was not able to be sent</p>";
	}

	$output = <<<EOF
					<p>Thanks for submitting a message</p><br>

EOF;
	echo $output;
}

?>