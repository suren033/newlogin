<?php
session_start();
if( isset( $_POST['username']) && isset( $_POST['password']) )  {

	include('loginDb.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = $db->query(" SELECT `password` FROM `users` WHERE `username`='$username' ");

	if( $query != null ) {

		$query = mysqli_fetch_assoc($query);

		if( $password == $query['password']) {
			
			$_SESSION['login'] = true;
			header('location: hello.php');
		} else {

			header('location: login.php');
		}
	}	

} else {
	header('location: login.php');
}


