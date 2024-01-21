<?php

    //Conenct with database table
    require('Reservation-connection.php');

?>   

<?php   

    //Retrived data from database table
    $user_list = '';
    $query = "SELECT * FROM bookdetails";
    $users = mysqli_query($connection , $query);

  

    if($users){

        echo "<br> Date successfully retrieved from table ";
        
    }
    else{
        echo "error data retrieve";
    }    

   
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Reservation-userlist.css">
</head>
<body>


<h2 class="user-list"> Reservation Records </h2>
<button typr="button" class="go-to-reservation"><a href="Reservation.php" > &larr; Go To Reservation </a> </button>
<table  action="#" method="POST">
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Route</th>
    <th>Member</th>
    <th>Check-in </th>
    <th>Check-out </th>
    <th class="colspan" colspan="2">Operation</th>

<?php

    //Getting informatios through while loop
    while($user=mysqli_fetch_assoc($users)){


?>
        <tr> 
            <td> <?php echo $user['name']; ?> </td>
            <td> <?php echo $user['email']; ?> </td>
            <td> <?php echo $user['phone']; ?> </td>
            <td> <?php echo $user['route']; ?> </td>
            <td> <?php echo $user['memebrs']; ?> </td>
            <td> <?php echo $user['check_in']; ?> </td>
            <td> <?php echo $user['check_out']; ?> </td>
            <td> <button type="button" values="submit" class="update-btn"> <a href="Reservation-update-user.php?user_id=<?php echo $user['id'];?>" >Update </a></button> </td>
            <td> <button type="button" name="delete" class="delete-btn"> <a href="Reservation-delete-user.php?user_id=<?php echo $user['id'];?>" >Delete </a></button> </td>
            
            
        </tr>

<?php
 
        
    }
?>

</table>   
    
</body>
</html>