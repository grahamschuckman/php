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

	<title>Customer Database</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php'); ?>
		<br>

		<!--Data for Customer Database will be pulled from Microsoft SQL-->
		<div class="row">
			<div class="col-6">
				<h4 style="margin-left: 10px">Customer Database</h4>
				<button type="button">
					<a href="edit-customers.php">Edit</a>
				</button>
				<table style="margin-left: 10px" align="left">
					<tr>
						<th>Customer ID</th>
						<th>Prior Customer?</th>
						<th>Customer First Name</th>
						<th>Customer Last Name</th>
						<th>Email Address</th>
						<th>Phone Number</th>
						<th>Address</th>
						<th>City</th>
						<th>State</th>
						<th>Zip Code</th>
						<th>Service Requests</th>
						<th>Quotes</th>
						<th>Customer Type</th>
					</tr>
					<tr>
						<td>C53318192</td>
						<td>Yes</td>
						<td>Jen</td>
						<td>Wedekind</td>
						<td>jenw@aol.com</td>
						<td>410-290-5083</td>
						<td>801 Turnpike Lane</td>
						<td>Princeton</td>
						<td>NJ</td>
						<td>71212</td>
						<td><a button type="button" href="service-requests.php" target="_blank">View Requests</a></td>
						<td><a button type="button" href="customer-quotes.php" target="_blank">View Quotes</a></td>
						<td>Residential</td>
					</tr>
					<tr>
						<td>C59271305</td>
						<td>Yes</td>
						<td>Lakshmi</td>
						<td>Shyam</td>
						<td>lakshmis@gmail.com</td>
						<td>202-793-1800</td>
						<td>15 West 32nd St</td>
						<td>New York</td>
						<td>NY</td>
						<td>71212</td>
						<td><a button type="button" href="service-requests.php" target="_blank">View Requests</a></td>
						<td><a button type="button" href="customer-quotes.php" target="_blank">View Quotes</a></td>
						<td>Residential</td>
					</tr>
					<td>C56352122</td>
					<td>No</td>
					<td>Graham</td>
					<td>Schuckman</td>
					<td>grahams@comcast.net</td>
					<td>301-727-5011</td>
					<td>351 East Ave</td>
					<td>Indianapolis</td>
					<td>IN</td>
					<td>80151</td>
					<td><a button type="button" href="service-requests.php" target="_blank">View Requests</a></td>
					<td><a button type="button" href="customer-quotes.php" target="_blank">View Quotes</a></td>
					<td>Residential</td>
					<tr>
						<td>C58901324</td>
						<td>No</td>
						<td>Sarah</td>
						<td>Elgendy</td>
						<td>sarahe@yahoo.com</td>
						<td>202-527-3099</td>
						<td>123 Lincoln Ave</td>
						<td>Santa Fe</td>
						<td>NM</td>
						<td>87501</td>
						<td><a button type="button" href="service-requests.php" target="_blank">View Requests</a></td>
						<td><a button type="button" href="customer-quotes.php" target="_blank">View Quotes</a></td>
						<td>Commercial</td>
					</tr>
					<tr>
						<td>C55498826</td>
						<td>Yes</td>
						<td>Mazin</td>
						<td>Elhag</td>
						<td>mazine@gmail.com</td>
						<td>410-222-3735</td>
						<td>72 15th St</td>
						<td>New York</td>
						<td>NY</td>
						<td>10004</td>
						<td><a button type="button" href="service-requests.php" target="_blank">View Requests</a></td>
						<td><a button type="button" href="customer-quotes.php" target="_blank">View Quotes</a></td>
						<td>Commercial</td>
					</tr>
					<tr>
						<td>C54276079</td>
						<td>No</td>
						<td>Elon</td>
						<td>Holloway</td>
						<td>elonh@aol.com</td>
						<td>240-813-4917</td>
						<td>455 Main St</td>
						<td>Springfield</td>
						<td>IL</td>
						<td>65432</td>
						<td><a button type="button" href="service-requests.php" target="_blank">View Requests</a></td>
						<td><a button type="button" href="customer-quotes.php" target="_blank">View Quotes</a></td>
						<td>Residential</td>
					</tr>
				</table>
			</div>

			<!--Data for Commercial Information will be pulled from Microsoft SQL database-->
			<div class="col-8">
				<br>
				<br>
				<h4 style="margin-left: 10px">Commercial Information</h4>
				<table style="margin-left: 10px">
					<tr>
						<th>Contact Email Address</th>
						<th>Company Name</th>
						<th>Address</th>
						<th>City</th>
						<th>State</th>
						<th>Zip Code</th>
					</tr>
					<tr>
						<td>sarahe@yahoo.com</td>
						<td>Elgendy Enterprises</td>
						<td>123 Lincoln Ave</td>
						<td>Santa Fe</td>
						<td>NM</td>
						<td>87501</td>
					</tr>
					<tr>
						<td>mazine@gmail.com</td>
						<td>Elhag Inc.</td>
						<td>72 15th Street</td>
						<td>New York</td>
						<td>NY</td>
						<td>10004</td>
					</tr>
				</table>
			</div>
		</div>

	</div>


</body>
</html>

