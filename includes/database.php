<?php

	$con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
	if ($con->connect_errno){
		echo 'Failed to connect to MySQL:(' . $con->connect_errno . ')' . $mysqli->connect_error;
	}

?>