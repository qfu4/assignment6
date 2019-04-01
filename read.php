<?php
	// 1. Create a database connection
	// NOTE: you should fix this - see "insert.php" ...do it that way
	$dbhost = "localhost";
	$dbuser = "assignment06";
	$dbpass = "coffee";
	$dbname = "assignment06";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// 2. Perform database query
	$query  = "SELECT * FROM hell";
	$result = mysqli_query($connection, $query);
?>

