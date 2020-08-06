<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Update Customer Information</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('owner-nav.php'); ?>
		<br>

		<h2>Update Customer Information</h2>

		<div class="row">
			<div class="col-6">

				<form>
					<label for="id">Customer ID:</label><br>
					<input type="text" id="id" name="id" value=""><br><br>
					<label for="return">Previous Customer?</label><br>
					<input type="radio" id="yes" name="yes" value="Yes">Yes</input><br>
					<input type="radio" id="no" name="no" value="No">No</input><br><br>
					<label for="fname">First Name:</label><br>
					<input type="text" id="fname" name="fname" value=""><br><br>
					<label for="lname">Last Name:</label><br>
					<input type="text" id="lname" name="lname" value=""><br><br>
					<label for="email">Email Address:</label><br>
					<input type="text" id="email" name="email" value=""><br><br>
					<label for="phone">Phone Number:</label><br>
					<input type="numeric"id="phone" name= "phone" value=""><br><br>
					<label for="address">Address:</label><br>
					<input type="text" id="address" name="address" value=""><br>
					<label for="city">City:</label><br>
					<input type="city" id="city" name= "city" value=""><br>
					<label for="state">State:</label><br>
					<input type="text" id="state" name= "state" value=""><br>
					<label for="zipcode">Zip Code:</label><br>
					<input type="text" id="zipcode" name= "zipcode" value =""><br>
					<label for="usertype">Customer Type:</label><br>
					<input type="radio"id="individual" name= "usertype" value="individual">Residential</input><br>
					<input type="radio" id="commercial" name="commercial" value="commercial">Commercial</input><br><br>
					<label for="companyname">Company Name (if applicable)</label><br>
					<input type="text" id="name" name="name" value=""><br><br>

					<label for="commercial">Is Commercial Information Same As Above?</label><br>
					<input type="radio" id="Yes" name="Information" value="Yes">Yes</input><br>
					<input type="radio" id="No" name="Information" value="No">No</input><br><br>
			<!--If 'Yes' is selected from above, should automatically fill out commercial information-->
					<label for="address">Commercial Address:</label><br>
					<input type="text" id="address" name="address" value=""><br>
					<label for="city">City:</label><br>
					<input type="city" id="city" name= "city" value=""><br>
					<label for="state">State:</label><br>
					<input type="text" id="state" name= "state" value=""><br>
					<label for="zipcode">Zip Code:</label><br>
					<input type="text" id="zipcode" name= "zipcode" value =""><br>
					<br>

				</form>
<!--These buttons will be able to attach the following files from the owner to the customer account-->
					<button type="button" align="center">
						<a href="customer-data.php" style="color: black;">Update Information</a>
					</button>
					<button type="button" align="center">
						<a href="customer-data.php" style="color: black;">Cancel</a>
					</button>

			</div>

			<div class="col-6">
						<button type="button">Add Service Request</button>
						<button type="button">Add Quote</button>
			</div>
		</div>