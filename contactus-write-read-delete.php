<?php 
//write data
require 'contactus-conntest.php';

    $name = $_POST["name"];
    $Email = $_POST["email"];
    $Subject = $_POST["subject"];
    $Phone = $_POST["phone"];
    $Message = $_POST["Message"];

    $sql = "INSERT INTO contactdatanew(name,email,subject,phone,message) VALUES('$name','$Email','$Subject',$Phone,'$Message');";

    if($conn->query($sql))
    {
        echo("<br>"."Thank you for been with us.");
    }
    else
    {
        echo("error!");
    }
$conn->close();

//read data
require'contactus-conntest.php';

$sql = "SELECT name,email,subject,phone,message FROM contactdatanew where id = (select MAX(id) from contactdatanew)";

$result = $conn->query($sql);

    if($result->num_rows>0)
    {
        while ($row = $result->fetch_assoc()) 
        {
            $name = $row["name"];
            $Email = $row["email"];
            $Subject = $row["subject"];
            $Phone = $row["phone"];
            $Message = $row["message"];
        }
        
    }
    else
    {
        echo("Sorry!");
    }
//$conn->close();
?>


<!DOCTYPE html>
<head>
        <link rel="stylesheet" href="css/stylesCUdata.css">
</head>
<body>
    <center>
    <div class="area">
        <h1>Summary of your message</h1>
        <?php echo $name ?><br><br>
        <?php echo $Email ?><br><br>
        <?php echo $Subject ?><br><br>
        <?php echo $Phone ?><br><br>
        <div class="messagearea"> <?php echo $Message ?><br> </div>
    </div>
    <br>
    <button class="updatebtn" > <a href="contactus-update.php"> UPDATE </a> </button>
    <button class="deletebtn" type="submit" name="delete">DELETE</button>
    <button class="homebtn" > <a href="Homepage.php"> HOME </a> </button>
    <div class="infoarea">
        <br>
        If you want to make changes, click the update button. <br><br>
        If you want to delete your message, click the delete button.
    </div>
    </center>
</body>




<?php
// delete recode

require 'contactus-conntest.php';

// Check delete button is clicked
if (isset($_POST['delete'])) 
{
    $deleteSql = "DELETE FROM contactdatanew WHERE id = (SELECT MAX(id) FROM contactdatanew)";
    $conn->query($deleteSql);

    echo("You message has been deleted");
}

$conn->close();

?>



