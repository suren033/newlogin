<?php
	$conn = new mysqli('localhost', 'root', '', 'mydb');

	if ($conn->connect_error) {
		die ("Connection faild: " . $conn->connect_error);
	}

	 $sql = "INSERT INTO pricing (img, title, descrip, num, development, advetising, game, music, hire)
    VALUES ('far fa-calendar-alt calendar', 'Full-time work', 'I am available for full time', '$1500', 'development', 'advetising', 'Game Development', 'Music Writing', 'Hire Me');";
    $sql .= "INSERT INTO pricing (img, title, descrip, num, development, advetising, game, music, hire)
    VALUES ('fas fa-file calendar', 'Fixed Price Project', 'I am available for full time', '$500', 'development', 'advetising', 'Game Development', 'Music Writing', 'Hire Me');";
    $sql .= "INSERT INTO pricing (img, title, descrip, num, development, advetising, game, music, hire)
    VALUES ('fas fa-hourglass calendar', 'Hourley work', 'I am available for full time', '$50', 'development', 'advetising', 'Game Development', 'Music Writing', 'Hire Me');";

	if ($conn->multi_query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>