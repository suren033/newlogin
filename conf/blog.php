<?php
	$conn = new mysqli("localhost", "root", "", "mydb");

	if ($conn->connection_error) {
		die ("Connection faild: " . $conn->error);
	}

    $sql = "INSERT INTO blog (img, title, num, autor, descrip, moretext)
	VALUES ('img/b-1.png', 'A life without the daily traffic jams', '24.11.19', 'ThemeSpiders', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 'Read More');";
	$sql .= "INSERT INTO blog (img, title, num, autor, descrip, moretext)
	VALUES ('img/b-2.png', 'Proportion are whats really needed', '24.11.19', 'ThemeSpiders', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 'Read More');";
	$sql .= "INSERT INTO blog (img, title, num, autor, descrip, moretext)
	VALUES ('img/b-3.png', 'Mounts of paper work to remember the way', '24.11.19', 'ThemeSpiders', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout', 'Read More');";

	if ($conn->multi_query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>