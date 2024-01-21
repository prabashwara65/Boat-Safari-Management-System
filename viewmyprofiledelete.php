<?php
session_start();
require 'SignUP_database_connection.php';

if(isset($_POST['Delete_profile']))
{
	$current_user_name = $_SESSION['username'];
	$sql = "DELETE FROM userdetails WHERE Username = '$current_user_name'";

	$conn->query($sql);

	if($conn->query($sql))
	{
		session_destroy();
		setcookie('Username',$username,time() -(86400 * 30),'/');
		echo "<script>alert('Profile successfully Deleted');</script>";
		header('Location:Homepage.php');
	}
	else
	{
		echo "<script>alert('Deletion Unsuccessfull');</script>";
	}
}
else
{
	echo "<script>alert('Not submitted to delete');</script>";
}
?>