<?php
// Implement the dbhelper
require_once("dbhelper.php");

// PHP Code to write the appropriate edit query & submit it to the DB
if(isset($_POST['approveID'])) {
	// Getting the values from the form, note how I get UID from the value of the button
	$IDToApprove = $_POST['approveID'];

	// Write the query
	$query = "UPDATE ServiceRequests SET Status ='Approved' WHERE RequestID='{$IDToApprove}'";

	// Run the query
	runQuery($query);

	//FIX EMAIL

	// Run query to get all details from service request that will need to be inserted into quotes
	$query2 = "SELECT * FROM ServiceRequests WHERE RequestID='{$IDToApprove}'";

	// store all the records from the ServiceRequests table in a variable, which is used below to insert values into Quotes
	$sr = getOneRow($query2);

	$oEmail = $sr['Email'];
	$description = $sr['ServiceDesc'];

	//echo $oEmail;

	// Query to insert a new quote once a service request has been approved
	$query3 = "INSERT INTO OwnerQuotes (RequestID, oEmail, ServiceDescription, Status) VALUES ('{$IDToApprove}', '{$oEmail}', '{$description}', 'Pending Owner Review');";

	// Run the query
	runQuery($query3);

	// Redirects me to the directory page so I can see the changes
	header("Location: service-requests.php?RequestID={$IDToApprove}");

} else {
	// Else, meaning that someone randomly typed this page
	header('Location: index.php');
}

?>