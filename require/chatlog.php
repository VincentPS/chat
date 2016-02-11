<?php
	$selector = "SELECT * FROM berichten";
	$result = $conn->query($selector);
	$rows = $result->fetch_all(MYSQLI_ASSOC);
	$conn->close();

?>