<?php
	// For some reason, this always needs to be before any HTML at the top of the page
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

	<title>Homepage</title>

	<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>


	<div class="container">

		<?php require_once('navbar.php'); ?>

		<br>

		<!-- First, check if the type is set & is a owner -->
		<?php if(isset($_SESSION['accessLevel']) AND $_SESSION['accessLevel'] == 1) { ?>

			<p>You are currently logged in as an owner with username <?php echo $_SESSION['username']; ?></p>

		<!-- Then, check if the type is set & is a technician -->
		<?php } else if (isset($_SESSION['accessLevel']) AND $_SESSION['accessLevel'] == 2) { ?>

			<p>You are currently logged in as a technician with username <?php echo $_SESSION['username']; ?></p>

		<!-- Then, check if the type is set & is a customer -->
		<?php } else if (isset($_SESSION['accessLevel']) AND $_SESSION['accessLevel'] == 3) { ?>

			<p>You are currently logged in as a customer with username <?php echo $_SESSION['username']; ?></p>

		<?php } else { ?>
			<!-- else, meaning nobody is logged in -->
			<p>Nobody is logged in!</p>

		<?php } ?>
	
		<div class="row">
			<div class="col">
				<p>Computer Guys (not geeks) is a service-oriented Computer and Network support firm serving greater Maryland. With industry and technical expertise exceeding 25 years, we can help you with any computer or network related issue. Our mission is to provide prompt professional service and fast problem resolution. Let's get right to it - if you have a computer or networking problem or need, you've come to the right place.  We offer an absolutely no-risk guarantee that you won't find anywhere else!!  Make an appointment and tell us what your problem is.  We will solve that problem or you pay nothing (details here).  That's right!  You read that correctly but it's worth repeating: We will solve your computer problem or you pay nothing!  Just try to get that guarantee somewhere else.  If the "geeks" can't fix it, you'll pay twice.</p>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<h3>Service Price Comparisons</h3>
				<table class="table table-striped">
					<tr>
						<th>Hours</th>
						<th>Computer Guys</th>
						<th>Geeks On Call</th>
						<th>Savings</th>
					</tr>
					<tr>
						<td>1st Hour</td>
						<td>$142.50</td>
						<td><s>$239.00</s></td>
						<td>$96.50</td>
					</tr>
					<tr>
						<td>2nd Hour</td>
						<td>$237.50</td>
						<td><s>$379.00</s></td>
						<td>$141.50</td>
					</tr>
					<tr>
						<td>3rd Hour</td>
						<td>$332.50</td>
						<td><s>$519.00</s></td>
						<td>$186.50</td>
					</tr>
					<tr>
						<td>4th Hour</td>
						<td>$427.50</td>
						<td><s>$659.00</s></td>
						<td>$231.50</td>
					</tr>
				</table>

				<p>Thinking about bringing your computer to Best Buy or other "big box" store. Think again and pay attention to the form they have you sign. You agree that you are responsible for backing up your data files. Translation: they frequently "fix" your computer by reinstalling Windows. And, indeed, your computer will be fixed WITH ALL YOUR PROGRAMS, FILES and SETTINGS GONE. Sure, they'll offer to back up your files for you at an additional charge. On the contrary, we are experts at fixing your computer while leaving your system intact.</p>

				<p>Don't trust your system to a "geek" - let a PRO handle it.</p>

				<p>We're Professionals.  Our senior technicians have 15 - 31  years of computer and network support experience.  Contact us today to schedule an appointment.</p>

				<h3>Just Help Me Now!</h3>
				<p>OK.  You don't want to read all the pages and figure out what to do.  You just want help now.  Simple!  Here's what you need to know.</p>
				<p>1) If you suspect a possible hard drive crash or are concerned about recovering lost data or files:</p>
				<p>STOP right here, turn off your computer, remove the power cord from the wall and do not turn it back on until the technician arrives.</p>
				<p>2) Call to make an appointment or fill out the form on the right and we will call you back ASAP to fix the problem!</p>
			</div>

			<div class="col-6">
				<h3>Contact Us</h3>
				<!-- This form will be connected with PHP to our submissions request review page that the owner can see -->
				<div class="form">	
					<form action="index.php" method="POST">

						<label>First Name</label>
						<input type="text" name="fname" required>

						<label>Last Name</label>
						<input type="text" name="lname" required>

						<label>Phone Number</label>
						<input type="tel" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

						<label>Email</label>
						<input type="email" name="email" required>

						<label>Business Name</label>
						<input type="text" name="businessname">

						<label>Address</label>
						<input type="text" name="address" required>

						<label for="customertype">Customer Type</label>
						<select id="customerype" name="customertype">
							<option value="Commercial">Commercial</option>
							<option value="Residential">Residential</option>
						</select>

						<label for="devicetype">Which Type of Device?</label>
						<select id="devicetype" name="devicetype">
							<option value="Laptop">Laptop</option>
							<option value="Desktop">Desktop</option>
						</select>

						<label for="devicedescription">Device Description</label>
						<textarea id="devicedesc" name="devicedesc" style="height:200px"></textarea>

						<label for="service">Which Type of Service?</label>
						<select id="service" name="service">
							<option value="Upgrade">Upgrade</option>
							<option value="Networking">Wired/Wireless</option>
							<option value="Local">Local Networks (Printers, Files, Internet Connections)</option>
							<option value="Backup">Backup/Data Recovery</option>
							<option value="Start">Start/Booting Problems</option>
							<option value="Software">Software Glitches/Blue Screens</option>
							<option value="Internet">Internet Connectivity</option>
							<option value="Security">Adware/Spyware/Viruses</option>
							<option value="Other">Other</option>
						</select>

						<label for="servicedesc">Service Description</label>
						<textarea id="servicedesc" name="servicedesc" style="height:200px"></textarea>
						<div style="text-align: center;">
							<input type="submit" name ="submit" value="Submit">
							<input type="reset" value="Cancel">
						</div>

					</form>
					<?php 
					// Checks if the submit button has been pressed, note this is accessing the "name" attribute
					if (isset($_POST['submit'])) {
						
						// Retrieves the information entered in the form
						$fname = $_POST['fname'];
						$lname = $_POST['lname'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$businessname = filter_input(INPUT_POST, 'businessname',FILTER_SANITIZE_SPECIAL_CHARS);
						$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);
						$customertype = $_POST['customertype'];
						$devicetype = $_POST['devicetype'];
						$devicedesc = filter_input(INPUT_POST, 'devicedesc',FILTER_SANITIZE_SPECIAL_CHARS);
						$service = $_POST['service'];
						$servicedesc = filter_input(INPUT_POST, 'servicedesc',FILTER_SANITIZE_SPECIAL_CHARS);

						// Writes the SQL query
						$query = "INSERT INTO ServiceRequests (FName, LName, Phone, Email, BusinessName, Address, CustomerType, DeviceType, DeviceDesc, ServiceType, ServiceDesc, Status) VALUES ('{$fname}','{$lname}','{$phone}','{$email}','{$businessname}','{$address}','{$customertype}','{$devicetype}','{$devicedesc}','{$service}','{$servicedesc}','Pending');";
						
						// Uses the proper function from the helper codes to run the query
						runQuery($query);
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