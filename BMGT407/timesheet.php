<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Technician Timesheet</title>

		<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
	<body>


		<div class="container">

			<?php require_once('technician-nav.php'); ?>
			<br>


			<h2>
				Technician Timesheet
			</h2>

			<form>
				<label for="tId">Enter Your Technician ID:</label><br> 
				<input type="text" id="title" name="tId"><br>

				<label for="week">Week Of:</label><br> 
				<input type="text" id="title" name="week"><br>

				<table id="t01">
					<tr>
						<th>Date</th>
						<th>Day</th>
						<th>JobId</th>
						<th>Hours</th>
						<th>JobId</th>
						<th>Hours</th>
						<th>JobId</th>
						<th>Hours</th>
						<th>JobId</th>
						<th>Hours</th>
						<th>JobId</th>
						<th>Hours</th>
					</tr>
					<!--The inputs from this part form will be part of populating the Invoices Table in the DB database-->
					<tr>
						<td>
							<input type="text" id="title" name="date"><br>
						</td>
						<td>Monday</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" id="title" name="date"><br>
						</td>
						<td>Tuesday</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>

					</tr>
					<tr>
						<td>
							<input type="text" id="title" name="date"><br>
						</td>
						<td>Wednesday</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" id="title" name="date"><br>
						</td>
						<td>Thursday</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" id="title" name="date"><br>
						</td>
						<td>Friday</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
						<td>
							<input type="text" id="title" name="jobid"><br>
						</td>
						<td>
							<input type="text" id="title" name="hours"><br>
						</td>
					</tr>
				</table>
				<input type="submit" value="Submit">

			</form>




		</body>
		</html>