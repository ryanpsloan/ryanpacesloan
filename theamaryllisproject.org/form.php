<?php


?>
<!DOCTYPE html>
<html>
<head>
	<style>
		input{

		}
		ul{
			list-style: none;
		}

	</style>
</head>
<body>
<div id="formDiv">
	<form name="registrationForm" method="post" action="PHP_SELF">
		<table>
		<tr>
			<td><label for="firstName">First Name: </label></td>
			<td><input name="firstName" type="text"></td>
		</tr>
		<label for="lastName">Last Name:</label>
		<input name="lastName" type="text"><br>
		<label for="businessName">Business Name:</label>
		<input name="businessName" type="text"><br>
		<!--find business on google and google maps-->
		<label for="businessAddress">Business Address:</label>
		<input name="businessAddress" type="text"><br>
		<label for="businessCity">City:</label>
		<input name="businessCity" type="text"><br>
		<p>Only businesses located in Hawaii USA qualify</p>
		<label for="businessZip">Zip Code:</label>
		<input name="businessZip" type="number">
		<label for="amountPower">Monthly Amount of Power Used by Your Business (kWh):</label>
		<input name="amountPower" type="number">
		<label for="avgBill">Average Monthly Bill</label>
		<input name="avgBill" type="number">
		<label for="place">Does your business have a place to construct a small solar farm?</label>
		<ul>
			<li><input name="ckLand" type="checkbox" value="Land"> Land </li>
			<li><input name="ckRoof" type="checkbox" value="Rooftop"> Building Rooftop</li>
		</ul>
		<label for="sqft">What is the square footage of the area?</label>
		<ul>
			<li><input name="sqft" type="number"> sq. ft.</li>
		</ul>

		<label for="rights">Do you have rights of ownership of the property?</label>
		<input name="ckYes" type="checkbox" value="Yes">
		<input name="ckNo" type="checkbox" value="No">

		<label for="imageUpload">Upload an image of the site:</label>
		<input name="imageUpload" type="image">
		</table>

		<input type="submit" value="Submit">
	</form>
</div>

</body>
</html>