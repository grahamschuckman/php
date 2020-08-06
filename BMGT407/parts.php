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

	<title>Parts</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php'); ?>

		<br>

		<h2>Add Part</h2>


		<div class="row">
			<div class="col-6">

				<form>
					<label for="partName">Part:</label><br>
					<input type="text" id="partname" name="partname" value=""><br>
					<label for="cost">Cost:</label><br>
					<input type="numeric"id="cost" name= "cost" value=""><br>
					<label for="quantity">Quantity:</label><br>
					<input type="numeric"id="quantity" name= "quantity" value=""><br>

					<label for="ajob">Assigned Job:</label><br>
					<input type="ajob"id="ajob" name= "password" value=""><br> 
					<br>

					<button type="button">
						<a href="parts.html" style="color: white;">Save</a> <!--will populate in parts/job tables -->
					</button>
					<button type="button">
						<a href="parts" style="color: white;">Cancel</a>
					</button>
					<table class="table">
						<tr>
							<th>Part</th>
							<th>Cost per item</th>
							<th>Quantity</th>
						</tr>
						<tr>
							<td>Dell Screen</td>
							<td>$200</td>
							<td>6</td>
						</tr>
						<tr>
							<td>2TB Internal Hard Drive</td>
							<td>$50</td>
							<td>4</td>

						</tr>
						<br>

						<!-- My first row, two columns equal width -->
						<div class="row">
							<div class="col">

							</div>
						</div>

						<div class="row">
							<div class="col-6">

							</div>

							<div class="col-6">


							</form>
							<br>
						</div>

						<!-- My first row, two columns equal width -->
						<div class="row">
							<div class="col">

							</div>
						</div>

						<div class="row">
							<div class="col-6">

							</div>

							<div class="col-6">



								<!-- Optional JavaScript -->
								<!-- jQuery first, then Popper.js, then Bootstrap JS -->
								<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
								<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
								<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
							</body>
							</html>