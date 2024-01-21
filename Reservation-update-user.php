<?php

    //Conenct with database table
    include_once('Reservation-connection.php');

?>


<?php   


    $name = " ";
    $email = " ";
    $phone = " ";
    $route = " ";
    $members = " ";
    $checkin = " ";
    $checkout = " ";

    $user_list = '';
    $query = "SELECT * FROM bookdetails";
    $users = mysqli_query($connection , $query);


    if($users){

        echo "<br> Date successfully retrieved from table ";
        
    }
    else{
        echo "error data retrieve";
    }    

    //Get user id by passing value as GET method
    if(isset($_GET['user_id'])){

        $user_id = $_GET['user_id'];
        
        //Select users according to their user_id
        $query = "SELECT * FROM bookdetails WHERE id = $user_id";
        
        $result_set = mysqli_query($connection , $query);
        
        if($result_set){
            echo "<br>Select from table query execute successfully ";
            echo "<br>User-id =".$user_id;

            $result = mysqli_fetch_assoc($result_set);

            $name = $result['name'];
            $email = $result['email'];
            $phone = $result['phone'];
            $route = $result['route'];
            $members = $result['memebrs'];
            $checkin = $result['check_in'];
            $checkout = $result['check_out'];
        }
        else{
            echo "<br>query execute Not successfully";
        }
    }
    else{
        echo "No User-id found";
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-user</title>
    <link rel="stylesheet" href="css/Reservation-update-user.css">
</head>
<body>

    <!-- Retrive data to anothr form-->
    <form action="#" method="POST" >
        Name :
        <input type="text" name="pname" <?php echo 'value="'. $name .'"'; ?>> <br>
        Email :
        <input type="email" name="email" <?php echo 'value="'. $email .'"'; ?>> <br>
        Phone :
        <input type="text" name="phone" <?php echo 'value="'. $phone .'"'; ?>> <br>
        Route :
        <input type="text" name="route"  <?php echo 'value="'. $route .'"'; ?>> <br>
        Memebrs :
        <input type="text" name="members"  <?php echo 'value="'. $members .'"'; ?>> <br>
        Check-in:
        <input type="date" name="checkin" <?php echo 'value="'. $checkin .'"'; ?>>
        Check-out:
        <input type="date" name="checkout" <?php echo 'value="'. $checkout .'"'; ?>>

       
        <input type="submit" value="Update" class="sumbit-btn">
        <button type="button" class="back-to-userlist" > <a href="Reservation-user-list.php"> View User list</a></button>  

        
    </form>

<?php

    if(!isset($_POST['submit'])){

        $name = $_POST["pname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $route = $_POST["route"];
        $members = $_POST["members"];
        $checkin = $_POST["checkin"];
        $checkout = $_POST["checkout"]; 

        //Update table respectively their user_id
        $query = "UPDATE bookdetails
                SET name = '$name', email = '$email', phone = '$phone',  route = '$route' , memebrs ='$members', check_in = '$checkin', check_out = '$checkout'
                WHERE id ='$user_id' ";

        $RESULT=mysqli_query($connection , $query);

        if($RESULT){

           echo "Record Update Successfully";
        }
        else{
            echo "<br> Record Update NOT Successfully";
        }

    
    }
    else{
        echo "<br> Record Update Failed";

    }



?>

</body>
</html>
