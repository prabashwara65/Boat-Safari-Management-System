<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $databasename = "sign_up_details";

 //creating database connection object
 $conn = new mysqli($servername,$username,$password,$databasename);

     if($conn->connect_error)
     {
     	echo "<script>alert('Connection lost');</script>";            //successfull message
     }
     else
     {
     	echo "<script>alert('Connection successfull');</script>";     //display unsuccessfull message
     }

?>