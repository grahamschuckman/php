<?php

require_once('dbhelper.php');
session_start();

// If the user has not signed in and is not an owner, then redirect to homepage
if(!isset($_SESSION['accessLevel']) OR ($_SESSION['accessLevel'] != 1)) {
	header('Location: index.php'); 
}

$IDforJob = $_GET['JobID'];
$query = "SELECT * FROM Jobs WHERE JobID='{$IDforJob}'";

	// store all the records from the Technicians table in a variable, which we will use below to create a table
$jobs = getOneRow($query);

?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Edit Job - <?php echo $jobs['JobID']; ?></title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php');?>
		<br>

		<div class="row">
			<div class="col-12">
				<h3>Jobs</h3>
				<div class="form">
					<?php 
						// First, we need to check if the UID is valid
					if($jobs) {
						?>

						<h4>Editing Jobs - <?php echo $jobs['JobID']; ?> </h4>

						<!-- Here I have my form tag, while I've used GET to create this page -->
						<!-- I need to now use POST to submit any edited information -->
						<form action="processEditjobs.php" method="POST">
							<!-- NOTICE: -->
							<!-- The value has the PHP I received from my SELECT query -->
							techusername: <input type="text" name="techusername" value="<?php echo $jobs['techusername']; ?>">
							Job Status: <input type="text" name="JobStatus" value="<?php echo $jobs['JobStatus']; ?>">
							<button name="edit" type="submit" value="<?php echo $IDforJob; ?>">Submit Changes</button>
						</form>

						<?php 
					} else {
						// else, meaning the UID is invalid
						echo "<p>Error. Please try again.</p>";
					}

					?>
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