<?php
	// For some reason, this always needs to be before any HTML at the top of the page
	session_start();

	// If the user has not signed in, redirect to homepage
	if(!isset($_SESSION['accessLevel'])) {
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

	<title>Status of Current Projects</title>

	<link rel="stylesheet" type="text/css" href="services.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php'); ?>
		<br>
		<h3>Check The Status of Your Job</h3>

		<h3>
			<div class= "searchcontain">
				<div class="invoicenav">
					<input type="text" placeholder="Search Jobs...">
				</div>
			</div>
		</h3>


		<!--This table will populated with information from the Jobs and ServiceRequests table in the DB-->
		<table id="t01">
			<tr background-color: #eee;>
				<th>Job</th>
				<th>Service</th>
				<th>Status</th>
			</tr>
			<tr>
				<td>J45783986</td>
				<td>Networking</td>
				<td>Complete</td>
			</tr>
			<tr>
				<td>J66557843</td>
				<td>Internet Connection</td>
				<td>Complete</td>
			</tr>
			<tr>
				<td>J87650934</td>
				<td>Complete Backup and Data Recovery</td>
				<td>In Progress...</td>
			</tr>
			<tr>
				<td>J87645008</td>
				<td>Removal of Adware / Spyware / Viruses</td>
				<td>Not Yet Approved</td>
			</tr>
			<tr>
				<td>J77765439</td>
				<td>Computer That Will Not Start / Boot</td>
				<td>Approved</td>
			</tr>
		</table>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>