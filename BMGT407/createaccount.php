<?php
require_once('dbhelper.php');
session_start();

//if already logged in, redirect to customer landing page
if(isset($_SESSION['username'])) {
	header('Location: index.php');
}

// Checks if submit has been pushed
if(isset($_POST['submit'])) {

	// GET DETAILS FROM FORM
	$username = $_POST['email'];
	$password = $_POST['password'];
	// Using the default PHP hash function method to encrypt my password
	$hash = password_hash($password, PASSWORD_DEFAULT);

	// Retrieves the other information entered in the form
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$type = $_POST['customertype'];
	$cname = $_POST['CompanyName'];
	$caddress = $_POST['CompanyAddress'];
	$city = $_POST['CompanyCity'];
	$cstate = $_POST['CompanyState'];
	$czip = $_POST['CompanyZip'];


	// Before inserting into my DB, I need to check if the user already exists
	// First, I select one row from my DB, where the usernames match
	$checkQuery = "SELECT username FROM Login WHERE username='{$username}'";
	$userExists = getOneRow($checkQuery);

	// If statment to check if the user exists
	if($userExists) {
		// If the user exists, I want to echo an error message.
		$errorMessage = "This username already exists.";
	} else {
		// Else, meaning the user does not exist, I use INSERT to add them into my DB
		// Inserts the username & encrypted password value into my DB
		$query = "INSERT INTO Login (username, password, usertype) VALUES ('{$username}','{$hash}', '3');";

		runQuery($query);

		// Insert customer data into the customer table
		$query2 = "INSERT INTO CustomerDatabase (Email, CustType, CompanyName, FirstName, LastName, Phone, Address, City, State, ZipCode) VALUES ('{$username}','{$type}','{$cname}','{$fname}','{$lname}','{$phone}','{$caddress}','{$city}'),'{$cstate}','{$czip}');";

		runQuery($query2);


		// Boolean value saying that I have registered, this changes the output of the HTML page
		$registered = TRUE;
	}
}

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Create Account Page</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php'); ?>
		<br>

		<h3>Create an account with us!</h3>

		<div class="row">
			<div class="col-12">
				<!-- The create account button will add the new account to the customers database and cateogrize it accordingly, the delete button should delete all of the fields -->
				<?php 
				// Check if I have registered
				if(isset($registered) AND $registered) {
					//echo "<h3>{$username} has been registered successfully.</h3>";
					header('Location: login.php');
				} else {
					// else, displays the register form
					?>

					<div class="form">
						<form action="createaccount.php" method="POST">
							<?php
							// if there is an errorMessage (from above), display it
							if (isset($errorMessage)){
								echo "<p>".$errorMessage."</p>";
							}
							?>
							<label for="fname">First Name</label>
							<input type="text" id="fname" name="fname" value="">

							<label for="lname">Last Name</label>
							<input type="text" id="lname" name="lname" value="">

							<label for="email">Email</label>
							<input type="text" name= "email" value="" required>

							<label for="password">Password</label>
							<input type="password"id="password" name= "password" value="" required>

							<label>Phone Number</label>
							<input type="tel" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">

							<label for="customertype">Customer Type</label>
							<select id="customertype" name="customertype">
								<option value="Commercial">Commercial</option>
								<option value="Residential">Residential</option>
							</select>

							<label>Company Name</label>
							<input type="text" name="CompanyName">

							<label for="lname">Company Address</label>
							<input type="text" id="CompanyAddress" name="CompanyAddress" value="">

							<label for="lname">Company City</label>
							<input type="text" id="CompanyCity" name="CompanyCity" value="">

							<label for="lname">Company State</label>
							<input type="text" id="CompanyState" name="CompanyState" value="">

							<label for="lname">Company Zip Code</label>
							<input type="text" id="CompanyZip" name="CompanyZip" value="">

							<button type="submit" name="submit">Create Account</button>

							<button type="button">
								<a href="login.php" style="color: white;">Cancel</a>
							</button>
						</form>
					</div>
					<!-- Don't forget to close the curly brace in PHP -->
				<?php  } ?>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>