<?php
	// Implements the helper functions
require_once('dbhelper.php');

	// Writing the query
$query = "SELECT * FROM Quotes;";

	// Getting all rows from the query
	// Note that I use "getRows" because this query will return multiple rows
$records = getRows($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quotes</title>
	<style>
		table {
			border-collapse: collapse;
		}
		table, tr, td, th {
			border: 1px solid black;
			padding: 5px;
		}
		td {
			vertical-align: center;
		}
	</style>
</head>
<body>
	<h2>Quotes</h2>
	<table>
		<?php

		if ($records) {
			echo "<th>Quote ID</th>
					<th>Request ID</th>
					<th>Quote Price</th>
					<th>Date Issued</th>
					<th>Quote</th>
					<th>Status</th>
					<th>Comments</th>";
		
			// Looping through all the rows of the database
			// At any point in time, $record represents one row of the entire database
			foreach ($records as $record) {
				echo "<tr>";
				// Accesses and prints the values inside the uid, name, and year columns, for every row in the database
				echo "<td>{$record['QuoteID']}</td>";
				echo "<td>{$record['RequestID']}</td>";
				echo "<td>{$record['QuotePrice']}</td>";
				echo "<td>{$record['DateIssued']}</td>";
				echo "<td>{$record['Quote']}</td>";
				echo "<td>{$record['Status']}</td>";
				echo "<td>{$record['Comments']}</td>";
				echo "</tr>";
			}
		} else {
			echo "<p>No quotes found in table.</p>";
		}
		?>
	</table>
</body>
</html>
