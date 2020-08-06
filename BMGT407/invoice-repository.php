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

	<title>Invoice Repository</title>

	<link rel="stylesheet" type="text/css" href="services.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php'); ?>

		<br>
		<h3>Your Invoices</h3>

		<h3>
			<div class= "searchcontain">
				<div class="invoicenav">
					<input type="text" placeholder="Search Invoices...">
				</div>
			</div>
		</h3>
		<h3>
			<a href="https://www.paypal.com/us/home">Pay On PayPal </a>
		</h3>
		
		<br>

		<!--This table will populated with information from the Invoices table in the DB-->
		<table id="t01">
			<tr>
				<th>Job ID</th>
				<th>Date Issued</th>
				<th>Amount Owed</th>
				<th>View Invoice</th>
			</tr>
			<tr>
				<td>J67543988</td>
				<td>4/12/2019</td>
				<td>$425.05</td>
				<td>
					<img class="invoiceimg" src=" https://cdn.vertex42.com/ExcelTemplates/Images/excel-invoice-template.png">
				</td>
			</tr>
			<tr>
				<td>J77765821</td>
				<td>8/14/2019</td>
				<td>$500.00</td>
				<td>
					<img class="invoiceimg" src=" https://cdn.vertex42.com/ExcelTemplates/Images/excel-invoice-template.png">
				</td>
			</tr>
			<tr>
				<td>J88654987</td>
				<td>2/12/2020</td>
				<td>$670.45</td>
				<td>
					<img class="invoiceimg" src=" https://cdn.vertex42.com/ExcelTemplates/Images/excel-invoice-template.png">
				</td>
			</tr>
			<tr>
				<td>J546789325</td>
				<td>3/14/2020</td>
				<td>$270.00</td>
				<td>
					<img class="invoiceimg" src=" https://cdn.vertex42.com/ExcelTemplates/Images/excel-invoice-template.png">
				</td>
			</tr>
			<tr>
				<td>J875699568</td>
				<td>4/4/2020</td>
				<td>$1170.65</td>
				<td>
					<img class="invoiceimg" src=" https://cdn.vertex42.com/ExcelTemplates/Images/excel-invoice-template.png">
				</td>
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