<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "raspberry";

	 // Create connection
	$conn = mysqli_connect($servername, $username, $password);
	 // Check connection
	if (! $conn) {
		die("Connection failed: " . mysqli_error($conn));
	} 

	mysqli_select_db($conn, $dbname);
	// sql to create table
	$sql = "CREATE TABLE IPs (
	id INT PRIMARY KEY, pi_ip VARCHAR(16)
	)";
	mysqli_query($conn, $sql);
	
	mysqli_close($conn);
	
	header("Location: addValues.php");

?>
