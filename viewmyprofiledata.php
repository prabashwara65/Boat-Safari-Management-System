<?php
session_start();
require 'SignUP_database_connection.php';

if(isset($_POST['savechanges']))
{
	$currentusername = $_POST['current_name'];
	$updatedusername = $_POST['reset_name'];
	$updatedemail = $_POST['reset_email'];
	$newpassword = $_POST['reset_password'];
	$re_entered_new_password = $_POST['reset_reenter_password'];
	$newstatus = 'Changed';

	$sql = "UPDATE userdetails SET Username ='$updatedusername',Email ='$updatedemail',Password ='$newpassword', Re_entered_passwor='$re_entered_new_password',Status ='$newstatus' WHERE Username = '$currentusername' ";


	if($conn->query($sql))
	{
		echo "<script>alert('Details updated successfully');</script>";
	}

	else
	{
		echo "<script>alert('Unsuccessfull! Try again');</script>";
		echo "Update unsuccssfull".$conn->error;
	}

	setcookie("Username",$updatedusername,time() + (86400 * 30) ,"/");
	$_SESSION['username'] = $updatedusername;
	header('Location: Dashboard.php');
}

else
{
	echo "<script>alert('Account not updated');</script>";

}

?>