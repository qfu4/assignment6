<?php
	// 1. Create a database connection
	require_once("config.php");

	// This data is coming from HTML form values in $_POST
	$insertFirstName = $_POST["firstName"];
	$insertLastName = $_POST["lastName"];
	$insertEmail = $_POST["email"];

	// You really should escape all strings
	$insertFirstName = mysqli_real_escape_string($connection, $insertFirstName);
	$insertLastName = mysqli_real_escape_string($connection, $insertLastName);
	$insertEmail = mysqli_real_escape_string($connection, $insertEmail);
	
	// 2. Perform database query
	$query  = "INSERT INTO newsletter (firstName, lastName, email) VALUES ('$insertFirstName','$insertLastName ','$insertEmail')";
	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Database Insert</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>


    <?php include 'include/top-bar.inc'; ?>

	
<div class="thank-page">
	<h1>Thank you!</h1>
<?php
	if ($result) {
		echo "Sign up for the newsletter! You will not regret..)";
?>
<?php
	} else {
		die("Database query failed.");
	}
?>


<div class="form-button">
	<a class="form-a" href="view.php">Checkout your handiwork</a>
</div>

<div class="form-button">
	<a class="form-a"href="index.php">Or go back to the Index</a>
</div>
</div>

</body>
</html>

<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>