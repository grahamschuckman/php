<?php
// For some reason, this always needs to be before any HTML at the top of the page
session_start();
require_once('dbhelper.php');

// If the user has not signed in and is not an owner, then redirect to homepage
if(!isset($_SESSION['accessLevel']) OR ($_SESSION['accessLevel'] != 1)) {
	header('Location: index.php');
}

// Checks if submit has been pushed
if(isset($_POST['submit'])) {

	// GET DETAILS FROM FORM
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$usertype = $_POST['usertype'];
	
	// Using the default PHP hash function method to encrypt my password
	$hash = password_hash($password, PASSWORD_DEFAULT);

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
		$query = "INSERT INTO Login (username, password, usertype) VALUES ('{$username}','{$hash}', '{$usertype}');";
		runQuery($query);

		$query2 = "INSERT INTO Technicians (TechnicianEmail, TechnicianFirst, TechnicianLast, TechnicianPhone, EmployeeType) VALUES ('{$email}','{$fname}','{$lname}','{$phone}', '{$usertype}');";
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

	<title>Add Employee Accounts</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

	<div class="container">

		<?php require_once('navbar.php'); ?>
		<br>

		<h3>Add Employee Account</h3>

		<div class="row">
			<div class="col-12">
				<!-- The create account button will add the new account to the customers database and cateogrize it accordingly, the delete button should delete all of the fields -->
				<div class="form">
					<form action="add-technician.php" method="POST">
						<?php
						if(isset($registered) AND $registered) {
							echo "<h4>Employee {$username} has been added successfully.</h4>";
						}

							// if there is an errorMessage (from above), display it
						if (isset($errorMessage)){
							echo "<p>".$errorMessage."</p>";
						}
						?>
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="fname" value="" required>

						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lname" value="" required>

						<label for="Email">Email</label>
						<input type="text" name= "email" value="" required>

						<label for="username">Username</label>
						<input type="text" name= "username" value="" required>

						<label for="password">Password</label>
						<input type="password"id="password" name= "password" value="" required>

						<label>Phone Number</label>
						<input type="tel" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

						<label for="usertype">Employee Type</label>
						<select id="usertype" name="usertype">
							<option value=1>Owner</option>
							<option value=2>Technician</option>
						</select>

						<button type="submit" name="submit">Create Account</button>

						<button type="button">
							<a href="technicians.php" style="color: white;">Cancel</a>
						</button>
					</form>
				</div>
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