<?php
// Implement the dbhelper
require_once("dbhelper.php");

// PHP Code to write the appropriate edit query & submit it to the DB
if(isset($_POST['assignID'])) {
	// Getting the values from the form, note how I get UID from the value of the button
	$IDToAssign = $_POST['assignID'];
	
	// Update the status of the quote to reflect that the customer must approve it
	$query = "UPDATE OwnerQuotes SET Status ='Job Created' WHERE QuoteID='{$IDToAssign}'";

	// Run the query
	runQuery($query);

	//FIX EMAIL

	// Run query to get all details from service request that will need to be inserted into quotes
	$query2 = "SELECT * FROM OwnerQuotes WHERE QuoteID='{$IDToAssign}'";

	// store all the records from the ServiceRequests table in a variable, which is used below to insert values into Quotes
	$quote = getOneRow($query2);

	$oEmail = $quote['oEmail'];
	$description = $quote['ServiceDescription'];
	$date = $quote['DateIssued'];
	$price = $quote['QuotePrice'];

	//echo $oEmail;

	// Query to insert a new job once a quote has been approved by the owner and confirmed by the customer
	$query3 = "INSERT INTO Jobs (DateIssued, ServiceDescription, QuoteID, JobStatus, QuotePrice, Email) VALUES ('{$date}', '{$description}', '{$IDToAssign}', 'Need Technician', '{$price}', '{$oEmail}');";

	// Run the query
	runQuery($query3);

	// Redirects me to the directory page so I can see the changes
	header("Location: customer-quotes.php?QuoteID={$IDToAssign}");

} else {
	// Else, meaning that someone randomly typed this page
	header('Location: index.php');
}

?>