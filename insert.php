<?php
	// 1. Create a database connection
	require_once("config.php");

	// This data is coming from HTML form values in $_POST
	$insertFirstName = $_POST["firstName"];
	$insertLastName = $_POST["lastName"];
	$insertEmail = $_POST["email"];

	// escape all strings
	$insertFirstName = mysqli_real_escape_string($connection, $insertFirstName);
	$insertLastName = mysqli_real_escape_string($connection, $insertLastName);
	$insertEmail = mysqli_real_escape_string($connection, $insertEmail);
	
	// 2. Perform database query
	$query  = "INSERT INTO newsletter (firstName, lastName, email) VALUES ('$insertFirstName','$insertLastName ','$insertEmail')";
	$result = mysqli_query($connection, $query);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Newsletter | Giodme Personal Website</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>


    <?php include 'include/top-bar.inc'; ?>

	
<div class="thank-page">
	<h1>Thank you for signing up!</h1>
<?php
	if ($result) {
		echo "What's next ...";
?>
<?php
	} else {
		die("Sorry... Something Wrong. Please Try Again Later.");
	}
?>



<div class="form-button">
	<a class="form-a">Contact us and start your first session today!</a>
</div>


<div class="form-button">
	<a class="form-a">Invite friends to learn about GIODME</a>
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