<?php
	$conn = new mysqli('localhost', 'root', '', 'mydb');

	if ($conn->connect_error) {
		die ("Connection faild: " . $conn->connect_error);
	}

    $sql = "INSERT INTO education (title, oxford, num, responsibility)
	VALUES ('UI/UX Designer', 'IronSketch', '2005-2008', 'Responsibility :');";
	$sql .= "INSERT INTO education (title, oxford, num, responsibility)
    VALUES ('Art & Multimedia From', 'Oxford University', '2005-2008', 'Responsibility :');";
    $sql .= "INSERT INTO education (title, oxford, num, responsibility)
	VALUES ('Art & Multimedia From', 'Oxford University', '2005-2008', 'Responsibility :');";

	if ($conn->multi_query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>



