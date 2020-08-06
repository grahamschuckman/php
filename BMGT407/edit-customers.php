<?php
	// For some reason, this always needs to be before any HTML at the top of the page
	session_start();

	// If the user has not signed in and is not an owner, then redirect to homepage
	if(!isset($_SESSION['accessLevel']) OR ($_SESSION['accessLevel'] != 1)) {
		header('Location: index.php');
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

	<title>Edit Customers</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php'); ?>
		<br>



		<div class="row">
			<div class="col-6">
				<h3>Add a Customer</h3>

				<form>
					<label for="id">Customer ID:</label><br>
					<input type="text" id="id" name="id" value=""><br><br>
					<label for="fname">First Name:</label><br>
					<input type="text" id="fname" name="fname" value=""><br><br>
					<label for="lname">Last Name:</label><br>
					<input type="text" id="lname" name="lname" value=""><br><br>
					<label for="email">Email Address:</label><br>
					<input type="text" id="email" name="email" value=""><br><br>
					<label for="lname">Phone Number</label>
					<input type="tel" id="phone" name="phone"><br><br>
					<label for="address">Address:</label><br>
					<input type="text" id="address" name="address" value=""><br><br>
					<label for="city">City:</label><br>
					<input type="text" id="city" name= "city" value=""><br><br>
					<label for="state">State:</label><br>
					<input type="text" id="state" name= "state" value=""><br><br>
					<label for="zipcode">Zip Code:</label><br>
					<input type="text" id="zipcode" name= "zipcode" value =""><br><br>

					<label for="customertype">Customer Type:</label>
						<select id="customertype" name="customertype">
							<option value="residential">Residential</option>
							<option value="commercial">Commercial</option>
						</select>
					<br>
			<!--Adding customers here would automatically input information into SQL database-->
					<button type="button" align="center">
						<a href="customer-data.php">Add Customer</a>
					</button>
					<button type="button" align="center">
						<a href="update-information.php">Update Information</a>
					</button>
					<button type="button" align="center">
						<a href="customer-data.php">Cancel</a>
					</button>

				</form>	
			</div>

			<div class= "col-6">
				
				<h3>If Commercial Information is Different:</h3>
				<!--Adding information here would automatically input into SQL database-->
				<form action="">
					<label for="cname">Company Name:</label><br>
					<input type="text" id="cname" name="cname" value=""><br><br>
					<label for="address">Address:</label><br>
					<input type="text" id="address" name= "address" value=""><br><br>
					<label for="city">City:</label><br>
					<input type="text" id="city" name= "city" value=""><br><br>
					<label for="state">State:</label><br>
					<input type="text" id="state" name= "state" value=""><br><br>
					<label for="zipcode">Zip Code:</label><br>
					<input type="text" id="zipcode" name= "zipcode" value =""><br><br>

				</form>

			</div>
		</div>




		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
	</html>