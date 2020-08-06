<?php

require_once('dbhelper.php');
session_start();

// if someone isn't logged in (notice the ! for NOT), don't allow them to see this page. Redirect them to the homepage 
// ALSO NEED TO CHECK IF THE USER HAS ACTUALLY PRESSED A BUTTON
// If the user has not signed in and is not an owner, then redirect to homepage
if(!isset($_SESSION['accessLevel']) OR ($_SESSION['accessLevel'] != 1)) {
	header('Location: index.php');
}

// Use the GET request from the button in technicians.php to query across pages and edit details
$IDForDetails = $_GET['TechnicianID'];
$query = "SELECT * FROM Technicians WHERE TechnicianID='{$IDForDetails}'";

	// store all the records from the Technicians table in a variable, which we will use below to create a table
$technician = getOneRow($query);

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Technician Details - <?php echo $technician['TechnicianEmail']; ?></title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php');?>
		<br>

		<div class="row">
			<div class="col-12">
				<h3>Technicians Directory</h3>
				<?php 
				// First, we need to check if the UID is valid
				if($technician) {
					?>

					<h3>Details for <?php echo $technician['TechnicianEmail']; ?></h3>
					<p>First: <?php echo $technician['TechnicianFirst']; ?></p>
					<p>Last: <?php echo $technician['TechnicianLast']; ?></p>
					<p>Phone: <?php echo $technician['TechnicianPhone']; ?></p>
					<?php 
				} else {
					// else, meaning the UID is invalid
					echo "<p>Error. No technician found with that ID.</p>";
				}

				?>
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
