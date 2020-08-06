<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Assign Tech</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php'); ?>
	<br>
			<div class="row">
			<div class="col">

	<h2>Jobs</h2>


	<div class="row">
			<div class="col-6">


			<form>
				<label for="assigntech">Assign Technician</label>
				<select id="assigntech" name="assigntech">
					<option value="techname1">Bob Builder</option>
					<option value="techname2">Dora Explora</option>
				</select>
				<label for="service">Service</label>
				<select id="service" name="service">
					<option value="ScreenReplacement">Screen Replacement</option>
					<option value="ReplaceHardDrive">Replace Hard Drive</option>
				</select>


			</form>
			<form>
				<button type="button">
					<a href="assigntech.html" style="color: white;">Save</a> <!-- populated from services requested and populated into jobs/assigned tech table -->
				</button>
			</form>
			<table class="table">
				<tr>
					<th>Service</th>
					<th>Customer ID</th>
					<th>Customer Name</th>
					<th>Date Requested</th>
					<th>Assigned Technician</th>
				</tr>
				<tr>
					<td>Screen Replacement</td>
					<td>11472</td>
					<td>Laurie Graham</td>
					<td> 3/2/2020</td>
					<td> Bob Builder</td>
				</tr>
				<tr>
					<td>Replace Hard Drive</td>
					<td>11473</td>
					<td>Stacey Stay</td>
					<td> 3/17/2020</td>
					<td> Dora Explora</td>
				</tr>
				<br>
					</div>
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