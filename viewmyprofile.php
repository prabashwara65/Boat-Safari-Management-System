<?php
session_start();
//database connection
require 'SignUP_database_connection.php';

$sqlnew = "SELECT Username,Email,Password,Re_entered_passwor FROM userdetails";

$result = $conn->query($sqlnew);

if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		if($_SESSION['username'] == $row['Username'])
		{
			$readusername = $row["Username"];
			$reademail = $row["Email"];
			$passwordread = $row["Re_entered_passwor"];
		}
	}
}

else
{
 echo"<script>alert('No recorded results');</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My profile | GREENHORIZON</title>
	<script src="https://kit.fontawesome.com/fe172d9324.js" crossorigin="anonymous"> </script>
	<style>
		body
		{
			margin: 0;
			background-image: url("img/background-profile-page.jpg");
		}
		.container
		{
			margin: 200px auto;
			display: flex;
			justify-content: space-around;
		}
		.container-1
		{
			padding: 80px;
			border: 2px solid dodgerblue;
			border-radius: 10px;
		}
		.user-details a
		{
			padding: 10px 20px;
			text-decoration: none;
			color: #fff;
			background-color: black;
		}
		.user-details a:hover
		{
			background-color: #fff;
			color: dodgerblue;
		}
		.container-2
		{
			padding: 50px;
			border: 2px solid dodgerblue;
			border-radius: 10px;
			width: 40%;
		}
		.input
		{
			margin: 0 0 5px 0;
			padding: 8px;
			width: 50%;
		}
		.save
		{
			padding: 10px 20px;
			/*text-decoration: none;*/
			color: #fff;
			background-color: black;
		}
		.delete
		{
			padding: 10px 20px;
			/*text-decoration: none;*/
			color: #fff;
			background-color: black;
		}
		.user-profile-sidebar
		{
			padding: 20px;
			display: flex;
			/*border: 1px solid black;*/
		}
		.user-profile-sidebar i
		{
			margin: 35px 10px 0 2px;
		}
		.settings
		{
			margin-bottom: 10px;
			display: flex;
			/*border: 1px solid black;*/
		}
		.settings i
		{
			margin: 45px 10px 0 2px;
		}
		.fa-user
		{
			font-size: 20px;
		}
		.fa-solid
		{
			font-size: 20px;
		}
	</style>
</head>
<body>
<div class="container">

	<div class="container-1">

		<div class="user-profile-sidebar">
			<i class="fa-solid fa-user"></i>
			<h3 style="text-align:center;font-size:30px;"><?php echo $readusername;?></h3>
		</div>

		<!-- <h2>My profile</h2> -->
		<div class="user-details">
		<p style="font-size: 20px;" id="username">User name: <?php echo $readusername;?></p>
		<p style="font-size: 20px;">Password: <?php echo $passwordread; ?></p>
		<p style="font-size: 20px;">Email: <?php echo $reademail;?></p>
			<form method="POST" action="viewmyprofiledelete.php">
				<input type="submit" class="delete" value="Delete Profile" name="Delete_profile">
			</form>
		<a href="Dashboard.php" class="back-to-dashboard" value="back-to-dashboard">Go Back to Dashboard</a>
		</div>

	</div>

	<div class="container-2">

		<div class="settings">
			<i class="fa-sharp fa-solid fa-gear"></i>
			<h4 style="font-size:30px;">Settings</h4>
		</div>

		<div class="input-fields">

			<form method="post" action="viewmyprofiledata.php">

				<label style="font-size: 20px;" for="input1">Enter current User name</label>
				<br>
				<input class="input input-1" type="text" id="input1" name="current_name">
				<br>

				<label style="font-size: 20px;" for="input1">Reset User name</label>
				<br>
				<input class="input input-2" type="text" id="input2" name="reset_name">
				<br>

				<label style="font-size: 20px;" for="input2">Reset Email</label>
				<br>
				<input class="input input-3" type="" name="reset_email" id="input3">
				<br>

				<label style="font-size: 20px;" for="input3">Reset password</label>
				<br>
				<input class="input input-4" type="password" name="reset_password" id="input4">
				<br>

				<label style="font-size: 20px;" for="input3">Re-enter reset password</label>
				<br>
				<input class="input input-5" type="password" name="reset_reenter_password" id="input5">
				<br>
				<br>
				<input type="submit" class="save" value="Save Changes" name="savechanges">
			</form>

		</div>
	</div>
</div>
</body>
</html>