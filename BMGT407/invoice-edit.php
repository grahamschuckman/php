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

	<title>Edit Invoice</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php'); ?>
		<br>

<!--Data for Editing Invoices will be pulled from Microsoft SQL and update Microsoft SQL-->

				<h4 style="margin-left: 10px">Edit Invoice</h4>
				<br>

		<div class="row">
			<div class="col-6">

				<form>
					<label for="InvoiceID">Invoice ID:</label><br>
					<input type="text" id="InvoiceID" name="InvoiceID" value=""><br><br>
					<label for="JobId">Job ID:</label><br>
					<input type="text" id="JobId" name="JobId" value=""><br><br>
					
			<!--The owner can choose to save the changes with the update invoice button or cancel any changes during editing-->

					<button type="button" align="center">
						<a href="update-information.html" style="color: black;">Update Invoice</a>
					</button>
					<button type="button" align="center">
						<a href="customer-data.html" style="color: black;">Cancel</a>
					</button>

				</form>	
			</div>

			<div class= "col-6">
				<!--Adding information here would automatically inpu new information into SQL database-->
				<form action="">
					<label for="QuotePrice">Quote Price:</label>
					<br>
					<input type="text" id="QuotePrice" name="QuotePrice" value="">
					<br><br>
					<label for="DateIssued">Date Issued:</label>
					<br>
					<input type="text" id="DateIssued" name= "DateIssued" value="">
					<br><br>
					<label for="PartsBilledPrice">Parts Billed Price:</label><br>
					<input type="text" id="PartsBilledPrice" name= "PartsBilledPrice" value="">
					<br><br>					
					<label for="OverheadCost">Labor Cost:</label><br>
					<input type="text" id="OverheadCost" name= "OverheadCost" value="">
					<br><br>					
					<label for="InvoiceTotalCost">Invoice Total Cost:</label><br>
					<input type="text" id="InvoiceTotalCost" name= "InvoiceTotalCost" value="">
					<br><br>


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