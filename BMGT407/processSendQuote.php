<?php
// Implement the dbhelper
require_once("dbhelper.php");

// PHP Code to write the appropriate edit query & submit it to the DB
if(isset($_POST['send'])) {
	// Getting the values from the form, note how I get UID from the value of the button
	$IDToSend = $_POST['send'];
	$price = $_POST['Price'];
	$comments = $_POST['Comments'];
	
	// Update the status of the quote to reflect that the customer must approve it
	$query = "UPDATE OwnerQuotes SET Status ='Pending Customer Review' WHERE QuoteID='{$IDToSend}'";
	// Run the query
	runQuery($query);

	$query2 = "UPDATE OwnerQuotes SET QuotePrice = '{$price}' WHERE QuoteID = '{$IDToSend}'";

	runQuery($query2);

	$query3 = "UPDATE OwnerQuotes SET Comments = '{$comments}' WHERE QuoteID = '{$IDToSend}'";

	runQuery($query3);
	// Redirects me to the directory page so I can see the changes
	header("Location: customer-quotes.php?QuoteID={$IDToSend}");

} else {
	// Else, meaning that someone randomly typed this page
	header('Location: index.php');
}

?>