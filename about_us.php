<?php 
    
    require ('code.php');

    if (isset($_POST["submit"]))
    {
        $Full_name = $_POST["Full_name"];
        $Phone_number = $_POST["Phone_number"];
        $Email = $_POST["Email"];
        $Gender = $_POST["Gender"];
        $Feedback = $_POST["feedback"];
    

    $query = "INSERT INTO feedback VALUES ('$Full_name','$Phone_number', '$Email','$Gender', '$Feedback')";

    mysqli_query($connection,$query);

    echo 
    "
    <script> alert('Data inserted Successfully');</script>
    ";
    }
?>

<?php require_once('code.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GREENHORIZON - Boat Safari trip</title>
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src = "js/script.js"></script>
</head>

<body>
    
    <div class = "head">
		<div class = "head1">
			<nav class = "fir">
				<ul>
					<li><a href="Homepage.php">Home</a></li>
					<li><a href="about_us.php">About us</a></li>
					<li><a href="Package Madhu River.php">Package</a></li>
					<li><a href="Reservation.php">Make Reservation</a></li>
					<li><a href="contactus.php">Contact us</a></li>
				</ul>
			</nav>
		
			<nav class = "seC">
				<ul>
					<li><a href="#">Login</a></li>
					<li><a href="SignUp.php">Sign up</a></li>
				</ul>
			</nav>
		</div>
	</div>



    <br>
    <img src="img/boat.jpg" alt="boat">
    <br><br>
    <div class="header">
        About us
    </div>

    <p class="des">GREENHORIZON is popular among both local and foreign tourists in Sri Lanka. We are established and well
        known organization in the industry. This boat safari is a unique way to 
        enjoy wildlife and nature. Our company system technology and managment provide an efficient 
        and flexible service for tourists. <br><br>
        We provide well experienced lifeguard, travel guider, boat operator for mechanical support.
        Also, tourists can customized their foods, snacks and drinks. You will experience a warm and freindly service from our 
        expert staff. <br><br>
        Our boat safri is memorable and enjoyble way to explore some most beautiful locations in Sri Lanka.
        We can assure you it gives you a totally different perspective of wildlife and the wild nature surroundings from
        inside a boat. We warmly welcome all the nature lovers and adventures to explore the natural beauty of Sri Lanka.
    </p><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="feed">Send us your comments and feedback!</div>
    

    <div class="toform">
        <form action="" class="forms" method="post">
            <p class="pform">Full Name :  
            <input type="text" name="Full_name" placeholder="Full_name" required> 
            </p>

            <p class="pform">Phone number :  
            <input type="text" name="Phone_number" placeholder="Phone_number" required>
            </p>
    

            <p class="pform">Email : 
            <input type="email" name="Email" placeholder="Email" required> 
            </p>

            <p class="pform">Gender :  
            Male 
            <input type="radio" name="Gender" value="Male" required>
            Female
            <input type="radio" name="Gender" value="Female" required>
            </p>

            <label for="" class="pform">Add feedback : </label> <br><br>
            <textarea name = "feedback"  cols="46" rows="4" required>
            </textarea>

            <p class="pform">
                    <button type = "submit" name = "submit">Submit</button>
            </p>
        
        </form>
    </div>
    <table>

    </table>

    <div><a href="selectquery.php"><button class = "view">View feedback</button></a></div><br><br>


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

		
		<form method="post" onsubmit="">
			<h4>Need any updates?</h4>
			<h5>Send us your email</h5>
			<input class="input-1" type="email">
			<input type="submit">
		</form>
        </div>
	<hr/>
    <h4 class="copyrights">Copyrights@GREENHORIZON.com</h4>	
	</div>

    
    
</body>
</html>
<?php mysqli_close($connection); ?>