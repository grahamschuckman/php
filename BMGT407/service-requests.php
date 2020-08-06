<?php
	// NOTE: YOU MAY LOGIN WITH username "user1" or "user2" and password "password"
require_once('dbhelper.php');
session_start();

// If the user has not signed in and is not an owner, then redirect to homepage
if(!isset($_SESSION['accessLevel']) OR ($_SESSION['accessLevel'] != 1)) {
	header('Location: index.php');
}

$query = "SELECT * FROM ServiceRequests";

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

	<title>Service Requests Directory</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php');?>
		<br>

		<div class="row">
			<div class="col-12">
				<h3>Service Requests Directory</h3>
				<table class="table table-striped">
					<tr>
						<th>Email</th>
						<th>Request ID</th>
						<th>Date of Request</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Phone</th>
						<th>Device Type</th>
						<th>Service Type</th>
						<th>Status</th>
						<th>Approve Request</th>
						<th>Reject Request</th>

					</tr>
					<?php 

						// Classic foreach loop to loop through Students table and display info
					foreach($records as $record) {
						echo "<tr>";

							echo "<td>{$record['Email']}</td>";
							echo "<td>{$record['RequestID']}</td>";
							echo "<td>{$record['RequestDate']}</td>";
							echo "<td>{$record['FName']}</td>";
							echo "<td>{$record['LName']}</td>";
							echo "<td>{$record['Phone']}</td>";
							echo "<td>{$record['DeviceType']}</td>";
							echo "<td>{$record['ServiceType']}</td>";
							echo "<td>{$record['Status']}</td>";
						?>

						<!-- NOTE: I ENDED PHP HERE to make it easier to display my <form> for the details button -->
							<td>
								<form action="processApproveRequest.php" method="POST">
									<button type="submit" name="approveID" value="<?php echo $record['RequestID'];?>">Approve</button>
								</form>
							</td>
							<!-- Literally the same code, except this goes to the edit page -->
							<td>
								<form action="delete-servicerequests.php" method="GET">
									<button type="submit" name="deleteID" value="<?php echo $record['RequestID'];?>">Reject</button>
								</form>
							</td>

							<!-- DELETE FROM `ServiceRequests` WHERE `ServiceRequests`.`RequestID` = 42; -->

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