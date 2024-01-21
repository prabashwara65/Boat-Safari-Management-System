<?php
	//include the configuration file
	require_once 'SignUP_database_connection.php';
	session_start();

	if(isset($_POST['SignOut']))
	{
		//session_unset();
		session_destroy();
		setcookie('Username',$username,time() -(86400 * 30),'/');
		echo "<script>alert('Sign out successfull');</script>";
		header('Location:Homepage.php');
	}

	$conn->close();
?>