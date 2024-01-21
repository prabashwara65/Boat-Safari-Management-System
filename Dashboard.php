<?php
	//include the database configuration file
	require_once 'SignUP_database_connection.php';
	session_start();

	if (isset($_COOKIE['Username']))
	{
		$USER_name = $_COOKIE['Username'];
		$_SESSION['username'] = $USER_name;//set a session to the user
	}

	else
	{
		//user not logged in, redirect to the SignUp page
		echo "<script>alert('User not logged in');</script>";
		header('Location: SignUp.php');
		exit;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard | GREENHORIZON</title>
	<script src="https://kit.fontawesome.com/fe172d9324.js" crossorigin="anonymous"> </script>
	<!--font awesome link for noto sans regular 400-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
	<!--font awesome link for noto sans regular 400-->
	<style>
		body
		{
			margin: 0;
		}
		.container
		{
			margin: 0;
		}
		.container img
		{
			width: 100%;
			border: #fff;
		}
		.container h3
		{
			font-family: 'Noto Sans', sans-serif;
		}

		.dashboard-userdetails
		{
			display: flex;
		}

		.dashboard-userdetails i
		{
			margin: 22px 10px 0 0;
			display: inline-flex;
			/*text-decoration: none;*/
			/*color:#fff;*/
		}
		.fa-circle-user
		{
			font-size: 24px;
		}
		.Dashboard-main
		{
			margin: 0;
			display: flex;
			justify-content: space-around;
			background-color: #fff;
		}

		.Options ul
		{
			display: flex;
			list-style-type: none;
		}

		.Options ul li a
		{
			margin: 0 12px 0 0;
			text-decoration: none;
			color: black;
			font-family: 'Noto Sans', sans-serif;
		}

		.Options ul li a:hover
		{
			text-decoration: underline;
		}

		.view-my-profile:hover
		{
			background-color: #fff;
			border-color: #414A22;
			color: #414A22;
		}
		.view-my-profile
		{
			margin:10px;
			padding: 5px 10px;
			/*display:block;*/
			text-decoration: none;
			color:#fff;
			border: 3px solid #fff;
			border-radius: 10px;	
			background-color: #9DAF4A;
			font-family: 'Noto Sans', sans-serif;
		}
		.sign-out
		{
			margin:10px;
			padding: 10px 20px;
			display:block;
			text-decoration: none;
			color:#fff;
			border: 3px solid #fff;
			border-radius: 10px;	
			background-color: #9DAF4A;
			font-family: 'Noto Sans', sans-serif;
			font-size: 15px;
		}
		.sign-out:hover
		{
			background-color: #fff;
			border-color: #414A22;
			color: #414A22;
		}
		
	</style>
</head>
<body>
<div class="container">
<div class="Dashboard-main"> 

	<div class="Options">
		<ul>
			<li><a style="font-size: 20px;" href="#"> Make reservation</a></li>
			<li><a style="font-size: 20px;" href="#">See packages</a></li>
			<li><a style="font-size: 20px;" href="#">view packages</a></li>
			<li><a style="font-size: 20px;" href="#">About us</a></li>
		</ul>
		<!-- <a href="#"> Make reservation</a> -->
		<!-- <a href="#">See packages</a> -->
	</div>

	<div class="dashboard-userdetails">
		<i class="fa-solid fa-circle-user"></i>
		<h3 style="color:#9D0F40;font-size: 20px;font-family: 'Noto Sans', sans-serif;"><?php echo $_SESSION['username']; ?> </h3>
		<a class="view-my-profile" href="viewmyprofile.php">View my profile</a>
		<!-- <a class="sign-out" href="viewmyprofile.php">Sign out</a> -->

		<form method="post" action="Signout.php">
		<input type="submit" class="sign-out" name="SignOut" value="SignOut">
		</form>
	</div>

</div>
<img src="img/boat image.png" alt="test-image">
<h3 style="text-align: center;">Copyrights@GREENHORIZON</h3>
</div>
</body>
</html>
