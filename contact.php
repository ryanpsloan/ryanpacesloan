<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/additional-methods.min.js"></script>
		<script type="text/javascript" src="contact.js"></script>
		<style>
			body {
				background-image: linear-gradient(90deg, blue, lightblue );

			}
			#formContainer{
				margin: 80px 460px;

			}
			.formP {
				margin-left: 40px;
				color: whitesmoke;
			}
			h1 {
				margin-left: 80px;
				color: whitesmoke;
			}
			textarea {
				resize: none;
			}
			textarea:focus{
				border: 2px solid purple;
			}
			label {
				color: whitesmoke;
			}
			input:focus {
				border: 2px solid purple;
			}
			span {
				color: white;
			}

		</style>
		<style>
		#msg {
			color: whitesmoke;
			text-align: center;
			font-size: 40px;
		}
		#homeLink {
			position: absolute;
			top: 2%;
			left: 3%;
			color: whitesmoke;
			font-size: 20px;
			text-decoration: none;
		}
		#homeLink:hover{
			color: cadetblue;
		}
		</style>
	</head>
	<body>
	<header>
		<a id="homeLink" href="index.php"><strong id="starImg">Home</strong></a>

	</header>
		<div id="formContainer">

		<h1>Contact Me</h1>
		<form id="contactForm" action="contactProcessor.php" method="GET">
			<p class="formP"><label for="name">&starf; Name:</label><br>
			<input type="text" size="50" id="name" name="name" autocomplete="off"/></p>
			<p class="formP"><label for="email">&starf; Email Address:</label><br>
			<input type="text" size="50" id="email" name="email" autocomplete="off"/></p>
			<p class="formP"><label for="msgArea">&starf; Your Message:</label><br>
			<textarea id="msgArea" name="msgArea" cols="50" rows="20"></textarea><br>
			<button type="submit" name="submit" value="send">Send Message</button>
		</form>
			<div class="formP" id="outputArea"></div>
		</div>


	</div>
	</body>
</html>
