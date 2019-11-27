<?php
	$conn = new mysqli('localhost', 'root', '', 'mydb');

	if ($conn->connect_error) {
		die ("Connection faild: " . $conn->connect_error);
	}

	$sql = "INSERT INTO skills (title, num)
	VALUES('Javascript', '86%');";
	$sql .= "INSERT INTO skills (title, num)
	VALUES('Java', '46%');";
	$sql .= "INSERT INTO skills (title, num)
	VALUES('Python', '38%');";
	$sql .= "INSERT INTO skills (title, num)
	VALUES('PHP', '17%');";
	$sql .= "INSERT INTO skills (title, num)
	VALUES('Ruby', '16%');";
	$sql .= "INSERT INTO skills (title, num)
	VALUES('C', '13%');";

	if ($conn->multi_query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>