<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/SignUp.js"></script>
	<title>Sign Up - GREENHORIZON</title>
	<!-- <script src="SignUp.js"></script> -->
	<style>
		body
		{
			margin: 0;
			background-color: #DBE8D8;
			background-image: url("img/background-signup.jpg");

		}
		.Signup-form
		{
			margin: 150px auto;
			border: 2px solid black;
			border-radius: 10px;
			width: 25%;
		}

		.Signup-form h2
		{
			margin-bottom: 30px;
			text-align: center;
		}
		.Signup-form input
		{
			padding: 5px;
		}
		.in
		{
			margin: 8px 0 0 10px;
			/*text-align: center;*/
			width: 91%;
		}
		.submitbtn
		{
			margin: 5px 0 0 40%;
			padding: 10px 20px;
		}
	</style>
</head>
<body>
<div class="Signup-form">
	<form method="post" action="Sign_up.php" onsubmit="return checkdetails()">

		<h2 style="color: #fff;">Sign Up for GREENHORIZON</h2>
		<label style="font-size:20px;color:#4A545D;color: #fff;" class="in" for="User_name">Enter User name</label>
		<br>
		<input class="in" type="text" id="User_name" name="user-name" required>
		<br>
		<br>

		<label style="font-size:20px;color: #fff;" class="in" for="email">Enter your email</label>
		<br>
		<input class="in" type="text" placeholder="someone@example.com" id="email" name="Email" required>
		<br>
		<br>


		<label style="font-size:20px;color: #fff;" class="in" for="password">Enter your password</label>
		<br>
		<input class="in" type="password" placeholder="Asded@12" id="password" name="pass_word" required>
		<br>
		<br>

		<label style="font-size:20px;color: #fff;" class="in" for="Re_enetered_password">Re-Enter your password</label>
		<br>
		<input class="in" type="password" id="Re_enetered_password" name="Re_enetered_password" required>
		<br>
		<br>

		<p style="text-align:center;font-size:20px;color: #fff;" class="in"><input type="checkbox" id="terms_conditions" name="terms&conditions" value="Clicked" onclick="enablebutton()"> I agree to the terms and conditions </p>
		<br>

		<input class="submitbtn" type="submit" id="sub_mit" name="submit" value="submit" disabled>
	</form>
</div>
</body>
</html>