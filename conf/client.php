<?php
	$conn = new mysqli('localhost', 'root', '', 'mydb');

	if ($conn->connect_error) {
		die ("Connection faild: " . $conn->connect_error);
	}

	$sql = "INSERT INTO client (img, descrip, nam, txt)
	VALUES('img/c-1.png', 'Absolute wonderful ! I am completely
                            blown away. <br> The very best.I was amazed
                            at the quality', 'John Mike', 'CEO,Author,Inc');";
    $sql .= "INSERT INTO client (img, descrip, nam, txt)
	VALUES('img/c-1.png', 'Absolute wonderful ! I am completely
                            blown away.<br>The very best.I was amazed
                            at the quality', 'John Mike', 'CEO,Author,Inc');";
    $sql .= "INSERT INTO client (img, descrip, nam, txt)
	VALUES('img/c-1.png', 'Absolute wonderful ! I am completely
                            blown away.<br>The very best.I was amazed
                            at the quality', 'John Mike', 'CEO,Author,Inc');";
    $sql .= "INSERT INTO client (img, descrip, nam, txt)
	VALUES('img/c-1.png', 'Absolute wonderful ! I am completely
                            blown away.<br>The very best.I was amazed
                            at the quality', 'John Mike', 'CEO,Author,Inc');";
    $sql .= "INSERT INTO client (img, descrip, nam, txt)
	VALUES('img/c-1.png', 'Absolute wonderful ! I am completely
                            blown away.<br>The very best.I was amazed
                            at the quality', 'John Mike', 'CEO,Author,Inc');";
    $sql .= "INSERT INTO client (img, descrip, nam, txt)
	VALUES('img/c-1.png', 'Absolute wonderful ! I am completely
                            blown away.<br>The very best.I was amazed
                            at the quality', 'John Mike', 'CEO,Author,Inc');";

	if ($conn->multi_query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>