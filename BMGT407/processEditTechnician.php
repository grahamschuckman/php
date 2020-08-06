<?php
// Implement the dbhelper
require_once("dbhelper.php");

// PHP Code to write the appropriate edit query & submit it to the DB
if(isset($_POST['edit'])) {
	// Getting the values from the form, note how I get UID from the value of the button
	$TechnicianIDToEdit = $_POST['edit'];
	$newEmail = $_POST['TechnicianEmail'];
	$newLast = $_POST['TechnicianLast'];
	// Write the query
	$query = "UPDATE Technicians SET TechnicianEmail='{$newEmail}', TechnicianLast='{$newLast}'  WHERE TechnicianID='{$TechnicianIDToEdit}'";

	// Run the query
	runQuery($query);
	// Redirects me to the directory page so I can see the changes
	header("Location: technician-detail.php?TechnicianID={$TechnicianIDToEdit}");

} else {
	// Else, meaning that someone randomly typed this page
	header('Location: index.php');
}

?>