<?php
//include database connection
require 'SignUP_database_connection.php';

if(isset($_POST['submit']))
{
  $username = $_POST['user-name'];
  $email = $_POST['Email'];
  $password = $_POST['pass_word'];
  $Re_entered_password = $_POST['Re_enetered_password'];
  $status = $_POST['terms&conditions'];

  //inserting values into tables
  $sql = "INSERT INTO userdetails(Username,Email,Password,Re_entered_passwor,Status) VALUES('$username','$email','$password','$Re_entered_password','$status')";

    if($conn->query($sql))
    {
    	echo "<script>alert('Sign in successfull');</script>";
    	
    	//set a coockie to the user
    	setcookie("Username",$username,time() + (86400 * 30) ,"/");

      //redirect to the dashboard
      header("Location: Dashboard.php");
      exit;
    }

    else
    {
    	echo "<script>alert('Signup is unsuccessfull');</script>";
      $conn->close();         //newley added
    	header('Location: SignUp.php');
    	exit;
    }

}

else
{
 echo "<script>alert('Data not submitted');</script>";
}

?>