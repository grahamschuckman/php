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

	<title>Invoice Database</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">
		<?php require_once('navbar.php'); ?>
		<br>

		<!--Data for Invoice Database will be pulled from Microsoft SQL-->

		<h4 style="margin-left: 10px">Invoice Database</h4>
		<br>
		<table style="margin-left: 10px" align="left">
			<tr>
				<th>Invoice ID</th>
				<th>Job ID</th>
				<th>Quote Price</th>
				<th>Date Issued</th>
				<th>Parts Cost</th>
				<th>Labor Cost</th>
				<th>Invoice Total Cost</th>
				<th>Edit Invoice</th>
			</tr>
			<tr>
				<td>I54327863</td>
				<td>J67543988</td>
				<td>$500.00</td>
				<td>4/16/2019</td>
				<td>$195.00</td>
				<td>$230.05</td>
				<td>$425.05</td>
				<td><a button type="button" href="invoice_edit.html" target="_blank">Edit Invoice</a></td>
			</tr>
			<tr>
				<td>I48201832</td>
				<td>J77765821</td>
				<td>$565.00</td>
				<td>4/16/2019</td>
				<td>$225.00</td>
				<td>$275.00</td>
				<td>$500.00</td>
				<td><a button type="button" href="invoice_edit.html" target="_blank">Edit Invoice</a></td>
			</tr>
			<tr>
				<td>I69382719</td>
				<td>J88654987</td>
				<td>$625.00</td>
				<td>4/16/2019</td>
				<td>$195.45</td>
				<td>$475.00</td>
				<td>$670.45</td>
				<td><a button type="button" href="invoice_edit.html" target="_blank">Edit Invoice</a></td>
			</tr>
			<tr>
				<td>I11094738</td>
				<td>J54678932</td>
				<td>$1000.00</td>
				<td>4/16/2019</td>
				<td>$412.65</td>
				<td>$758.00</td>
				<td>$1170.65</td>
				<td><a button type="button" href="invoice_edit.html" target="_blank">Edit Invoice</a></td>
			</tr>
			<tr>
				<td>I47382901</td>
				<td>J87569956</td>
				<td>$1500.00</td>
				<td>4/16/2019</td>
				<td>$612.47</td>
				<td>$978.00</td>
				<td>$1590.47</td>
				<td><a button type="button" href="invoice_edit.html" target="_blank">Edit Invoice</a></td>
			</tr>
			<tr>
				<td>I67739810</td>
				<td>J48294037</td>
				<td>$95.00</td>
				<td>4/16/2019</td>
				<td>$0.00</td>
				<td>$95.00</td>
				<td>$95.00</td>
				<td><a button type="button" href="invoice_edit.html" target="_blank">Edit Invoice</a></td>
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