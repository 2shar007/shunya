<?php
include_once("dbconfig.php");

function init(&$conn) {
	
	$conn = mysql_connect(dbhost, dbuser, dbpass) or die("Error: Unable to connect to Database");
	mysql_select_db(db, $conn);
}

function query($query) {
	$conn = null;
	init($conn);
	$results = mysql_query($query, $conn) or die ("Error: ".$query." threw ".mysql_error());
	kill($conn);
	return $results;
}

function kill(&$conn) {
	mysql_close($conn);
}
?>
