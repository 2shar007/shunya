<?php
include_once("dbhandler.php");

function get_agents() {
	
	$q = "SELECT * FROM agent";
	
	$rows = query($q);
	
	return $rows;
}

?>
