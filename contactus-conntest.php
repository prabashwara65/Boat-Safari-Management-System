<?php 

    $conn = new mysqli("localhost","root","","boatsafari");
    if($conn->connect_error)
    {
        die("connection failed:".$conn->connect_error);
    }
    else
    {
        echo("Connection Successful");
        //echo("The message has been submitted...");
    }


?>



    


