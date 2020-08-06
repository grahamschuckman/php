<?php
// Implements the helper functions
require_once('dbhelper.php');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

	<a class="navbar-brand" href="index.php" style="color: #FFA500;">The Computer Guys</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">

			<li class="nav-item">
				<a class="nav-link" href="aboutus.php">About Us</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="services.php">Services</a>
			</li>

			<!-- If the user is logged in and is logged in as an owner, show these links -->
			<?php if(isset($_SESSION['accessLevel']) AND $_SESSION['accessLevel'] == 1) { ?>
				<li class="nav-item">
					<a class="nav-link" href="customer-data.php">Customers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="service-requests.php">Service Requests</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="customer-quotes.php">Quotes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="jobs.php">Jobs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="parts.php">Parts</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="invoices.php">Invoices</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="technicians.php">Technicians</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>

				<!-- If the user is logged in and is logged in as a technician, show these links -->
			<?php } else if (isset($_SESSION['accessLevel']) AND $_SESSION['accessLevel'] == 2) { ?>
				<li class="nav-item">
					<a class="nav-link" href="technician.php">Jobs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="timesheet.php">Timesheet</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>

				<!-- If the user is logged in and is logged in as a customer, show these links -->	
			<?php } else if (isset($_SESSION['accessLevel']) AND $_SESSION['accessLevel'] == 3) { ?>
				<li class="nav-item">
					<a class="nav-link" href="customer-requests.php">Requests</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="quotes.php">Quotes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="project-status.php">Job Status</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="invoice-repository.php">Invoices</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>

				<!-- If the user is not logged in, show this link -->
			<?php } else { ?>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
			<?php } ?>

			<li class="nav-item">
				<a class="nav-link" href="tel:123-456-7890">Call Now!</a>
			</li>
		</ul>
	</div>
</nav>

<style>

	img {
		border-top-style: solid;
		border-top-color: white;
	}
</style>

<div class="text-center">

	<img src="https://www.geeksonsite.com/wp-content/uploads/2016/08/local-computer-repair-064.jpg" class="img-fluid" alt="Responsive image">

</div>