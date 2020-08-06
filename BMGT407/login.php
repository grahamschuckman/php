<?php
	// NOTE: YOU MAY LOGIN WITH username "admin" and password "password"

require_once('dbhelper.php');
	// start a session, so that we can use the $_SESSION array to store information across pages about a logged in user
session_start();

	//if already logged in, redirect to homepage
if(isset($_SESSION['username'])) {
	header('Location: index.php');
}

	 // check if the form was submitted by checking to see if PHP automatically set the $_POST variable
	 // if the form was submitted, we want to run the code to verify their login.
	 // if not, none of the code inside this block runs --> we skip it and don't do anything
if (isset($_POST['submit'])) {

	$usernameFromForm = $_POST['username'];
	$passwordFromForm = $_POST['password'];

		// construct your query--> note that this does not actually do anything! We need to run the query below.
	$query = "SELECT username, password, usertype FROM Login WHERE username = '{$usernameFromForm}'";

		// runs the query and returns the one record. We know there should only be one person with a given username
	$record = getOneRow($query);

		// Checks if the username from the form & hashed password matches what is in the DB
		// password_verify is the default php function for checking if a password matches its hash
	if ($record['username'] == $usernameFromForm AND password_verify($passwordFromForm, $record['password'])) {
			// they are authenticated --> store the session variable to log them in
		$_SESSION['username'] = $usernameFromForm;

		// If the usertype of the record is 1, then log them in as owner. If 2, log in as technician, else customer
		if ($record['usertype'] == 1) {

			$_SESSION['accessLevel'] = 1;
			// redirect them to the homepage
			header('Location: index.php');

		} else if ($record['usertype'] == 2) {

			$_SESSION['accessLevel'] = 2;
			// redirect them to the homepage
			header('Location: index.php');

		} else {

			$_SESSION['accessLevel'] = 3;
			// redirect them to the homepage
			header('Location: index.php');
		}

	} else {
			// display invalid error message
		$errorMessage = "Invalid username or password.";
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

	<title>Login Page</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php');?>
		<br>

		<div class="row">
			<div class="col-2">
			</div>
			<div class="col-8">
				<!-- This form will only have one button once the login works, but for now we are using both a customer login and an owner login button to test the landing pages.	-->
				<div class="form">
					<form action = "login.php" method = "POST">
						<?php
					// if there is an errorMessage (from above), display it
						if (isset($errorMessage)){
							echo "<p>".$errorMessage."</p>";
						}
						?>

						<label for="username"><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="username" required>

						<label for="password"><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>

						<button type="submit" name="submit">Login</button>

						<button type="button">
							<a href="createaccount.php">Create Account</a>
						</button>
					</form>
				</div>
			</div>
			<div class="col-2">
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