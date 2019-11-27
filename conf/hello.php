<?php
	$conn = new mysqli('localhost', 'root', '', 'mydb');

	if ($conn->connect_error) {
		die ("Connection faild: " . $conn->connect_error);
	}

	$sql = "INSERT INTO hello (icon, descrip)
	VALUES ('fas fa-envelope', 'getemail@email.com');";
	$sql .= "INSERT INTO hello (icon, descrip)
	VALUES ('fas fa-phone-alt', '+12 986 987 7867');";
	$sql .= "INSERT INTO hello (icon, descrip)
	VALUES ('fas fa-map-marker-alt', '37, Pollsatnd, New York, United State');";

	if ($conn->multi_query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>