<!DOCTYPE html>

<html>

	<head>

		<title>Contact Us</title>

		<link rel="stylesheet" href="css/stylesCU.css">
		<script src="js/formValidationCU.js"></script>
		
	</head>

	<body>

		<!-- NAVIGATION BAR -->
		<div class="container">
			<div class="nav-container">

				<ul class="navlist-1">
					<li><a href="Homepage.php"> Home </a></li>
					<li><a href="about_us.php"> About Us </a></li>
					<li><a href="Package Madhu River.php"> Packages </a></li>
					<li><a href="Reservation.php"> Make Reservation </a></li>
					<li><a href="contactus.php"> Contact Us </a></li>
				</ul>

				<ul class="navlist-2">
					<li><a href="#"> LOGIN </a></li>
					<li><a href="SignUp.php"> SIGN UP </a></li>
				</ul>

			</div>
		</div>
		<!-- END OF NAVIGATION BAR -->

	
		<h1>CONTACT US</h1>

		<div class="con1">

			<div class="sub1">

				<img src="img/2.PNG" width="45px" height="50px">
				<h2>Call Us <br><br> Hotline: +94112443556 <br> Sunimal: +94718223489 <br> Athula : +94778249302 </h2>

			</div>

			<div class="sub1">

				<img src="img/4.PNG" width="60px" height="45px">
				<h2>Email Us <br><br> greenhorizon@gmail.com <br> greenhorizon.info@gmail.com <br> greenhorizon@yahoo.com  </h2>

			</div>

			<div class="sub1">

				<img src="img/3.PNG" width="55px" height="50px">
				<h2>Location<br><br>Temple Road<br>Balapitiya<br>Sri Lanka</h2>

			</div>

		</div>

		<div class="paragraph">
		<p>Please complete the following form to request special reservation and obtain additional information.</p>
		<p>Our team will promptly get in touch with you. </p>
		</div>


		<div class="fullcon">

				<div class="contentleft">

					<form name="myForm" method="post" action="contactus-write-read-delete.php" onsubmit="return validateForm();">

						<div class="topic"> <h2>Send Your Message</h2> </div>

						<div class="formin">

							<div class="textfeelds">
								<label>Name:</label>
								<input type="text" class="text1" name="name" placeholder="Firstname Secondname">
							</div>	

							<div class="textfeelds">
								<label>Email:</label>
								<input type="text" class="text1" name="email" placeholder="xyz@gmail.com">
							</div>	

						</div> 

						<div class="formin">

							<div class="textfeelds">
								<label>Subject:</label>
								<input type="text" class="text1" name="subject" placeholder="Your subject">
							</div>

							<div class="textfeelds">
								<label>Phone:</label>
								<input type="text" class="text1" name="phone" placeholder="+94711234567">
							</div>
						</div>

						<div class="formin">
								<label>Message:</label><br><br>
								<textarea  name="Message" rows="4" cols="10"></textarea>							
						</div>

						<div class="formin">
							<input type="submit" class="submit1" value="SUBMIT" placeholder="Type your message here......">
						</div>

					</form>

				</div>

				<div class="contentright"> <img src="img/1.JPG" class="imagebox" width="300px" height="390px"> </div>
			
		</div>
<hr>

<!-- fotter -->

	<div class="footer">

		<div class="footer-1">

			<h2>GREENHORIZON</h2>

			<ul class="footer-list list-3">
				<li><a href="#">Home</a></li>
				<li><a href="#">Contact Us</a></li>
				<li><a href="#">Useful Links</a></li>
				<li><a href="#">About Us</a></li>
			</ul>

			<ul class="footer-list list-4">
				<li><a href="#">Follow Us on</a></li>
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Instagram</a></li>
				<li><a href="#">Twitter</a></li>
			</ul>
			
				<h5>New Posts</h5>
				<h5>Gallary</h5>
					
        </div>

		<hr/>

		<h4 class="copyrights">Copyrights@GREENHORIZON.com</h4>	

	</div>
	
	</body>

</html>