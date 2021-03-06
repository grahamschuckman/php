<?php
	// NOTE: YOU MAY LOGIN WITH username "user1" or "user2" and password "password"
require_once('dbhelper.php');
session_start();

// If the user has not signed in and is not an owner, then redirect to homepage
if(!isset($_SESSION['accessLevel']) OR ($_SESSION['accessLevel'] != 1)) {
	header('Location: index.php');
}

$query = "SELECT * FROM OwnerQuotes";

	// store all the records from the Student table in a variable, which we will use below to create a table
$records = getRows($query);

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Quotes</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php');?>
		<br>

		<div class="row">
			<div class="col-12">
				<h3>Quotes</h3>
				<table class="table table-striped">
					<tr>
						<th>Quote ID</th>
						<th>Request ID</th>
						<th>Email</th>
						<th>Description</th>
						<th>Quote Price</th>
						<th>Date Issued</th>
						<th>Status</th>
						<th>Comments</th>
						<!-- Table header for "Edit" Column -->
						<th>Send Quote</th>
						<th>Assign Job</th>
						
					</tr>
					<?php 

						// Classic foreach loop to loop through Students table and display info
					foreach($records as $record) {
						echo "<tr>";
						echo "<td>{$record['QuoteID']}</td>";
						echo "<td>{$record['RequestID']}</td>";
						echo "<td>{$record['oEmail']}</td>";
						echo "<td>{$record['ServiceDescription']}</td>";
						echo "<td>{$record['QuotePrice']}</td>";
						echo "<td>{$record['DateIssued']}</td>";
						echo "<td>{$record['Status']}</td>";
						echo "<td>{$record['Comments']}</td>";
						?>

						<!-- NOTE: I ENDED PHP HERE to make it easier to display my <form> for the details button -->
							
							<!-- This code will send the quote to the customer for review -->
							<td>
								<form action="send-quote.php" method="POST">
									<button type="submit" name="sendID" value="<?php echo $record['QuoteID'];?>">Send</button>
								</form>
							</td>

							<!-- This code will send the quote to a job -->
							<td>
								<form action="processCreateJob.php" method="POST">
									<button type="submit" name="assignID" value="<?php echo $record['QuoteID'];?>">Assign</button>
								</form>
							</td>


							<?php
							// CONTINUE PHP from the loop, close my row
							echo "</tr>";
							// End the loop
						}

						?>
					</table>

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