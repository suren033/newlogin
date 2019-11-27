<?php
	$conn = new mysqli('localhost', 'root', '', 'mydb');

	if ($conn->connect_error) {
		die ("Connection faild: " . $conn->connect_error);
	}

	$sql = "INSERT INTO wrap (title, wrap, design, txt, botton, deviationtext, shane)
	VALUES ('WEB DESIGN', 'WRAP', 'DESIGN & DEVELOPMENT', 'Stamp is a clean and elegant Multipurpose Landing Page Template. 
                                                It will fit perfectly for Startup, Web App or any type of Web Services.
                                                It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. 
                                                All variations are organized separately so you can use / customize the template very easily.', 'View Details', 'Excellent Template - suits my needs perfectly whilst allowing me to learn some new technology first hand.', '- Shane Kavanagh');";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>



