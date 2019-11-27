<?php
	session_start();

	if (isset( $_POST['username']) && $_POST['password']) {
		include ('config.php');

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = $db->query("SELECT `password` FROM `user` WHERE `username`= $username");

		if ($query != NULL) {
			$query = mysqli_fetch_assoc($query);
			if ($password == $query['password']) {
				$_SESSION['login'] = true;
				header('location: ok.php');
			} else {
				header('location: index.php');
			}
		} else {
			header('location: index.php');
		}
	}
?>