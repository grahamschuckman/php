<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>About Us</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

	<div class="container">

		<?php require_once('navbar.php'); ?>
		
		<br>

		<div class="row">
			<div class="col-7">
				<h3>The Boss</h3>
			</div>

			<div class="col-5">
				<h3>Our Story</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-2">
				<img src="Wedekind.jpg" alt="Bill Wedekind">
			</div>

			<div class="col-5">
				<p>Bill Wedekind is the founder of the Computer Guys and a resident of Maryland. Bill majored in computer science during his college years and spent several years working in the private sector, refining his technology skills. Today, he is the CEO of The Computer Guys and is an expert technician. If you want someone who can solve any of your networking, hardware, or software needs, contact Bill Wedekind at 410-COMPUTER!</p>
			</div>

			<div class="col-5">
				<p>The Computer Guys was founded on the belief that fixing your computer shouldn't mean wiping all of your data and spending hours restoring settings. At the Computer Guys, we promise to fix your computer faster and better than "the geeks" can, and if we can't, you won't pay a dime! We are a full service comptuer repair, networking, internet connectivity and upgrade firm so we can be a one-stop shop for all of your computer needs!</p>
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