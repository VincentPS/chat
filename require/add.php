	


<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "chat";
	$enter = $_POST['message'];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
		$query = "INSERT INTO berichten(tekst) VALUES ('$enter')";
		$result = $conn->query($query);
		
	header("Location: ../index.php");