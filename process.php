<?php
	include "route.php";
	$email	= $_REQUEST['email'];

	$mysqli	= "INSERT INTO profile (email) VALUES ('$email')";
	$result	= mysqli_query($conn, $mysqli);

	if ($result) {
		echo "01";
	} else {
		echo "02";
	}

	mysqli_close($conn);
?>