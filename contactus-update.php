<?php
require 'contactus-conntest.php';

$sql = "SELECT name,email,subject,phone,message FROM contactdatanew WHERE id = (SELECT MAX(id) FROM contactdatanew)";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        $name = $row['name'];
        $email = $row['email'];
        $subject = $row['subject'];
        $phone = $row['phone'];
        $message = $row['message'];
    }
} else {
    echo ("Sorry!");
}
//$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="css/stylesCUupdate.css">
</head>
<body>
    <center>
    <h1> Update your message </h1>
    <div class='upform'>
        <form method='post' action='#'>
            <br>Name:<br>
            <input type='text' name='name' value="<?php echo $name; ?>"> <br><br>
            Email:<br>
            <input type='text' name='email' value="<?php echo $email; ?>"> <br><br>
            Subject:<br>
            <input type='text' name='subject' value="<?php echo $subject; ?>"> <br><br>
            Phone:<br>
            <input type='text' name='phone' value="<?php echo $phone; ?>"> <br><br>
            Message:<br>
            <!-- <input type='text' name='message' value="<?php echo $message; ?>"> <br> -->
            <textarea name="message"><?php echo $message; ?></textarea><br>
    </div> 
            <br>
            <input type='submit' name='update' value='Update' class='updatebttn'>
            
        </form>
        <button class="homebtn" > <a href="Homepage.php"> HOME </a> </button>
    </center>

</body>
</html>

<?php
// Update
require 'contactus-conntest.php';

// Check if the update form is submitted
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $updateSql = "UPDATE contactdatanew SET name='$name', email='$email', subject='$subject', phone='$phone', message='$message' WHERE id = (SELECT MAX(id) FROM contactdatanew)";
    $conn->query($updateSql);

    echo("<br>"."<center>"."Your message has been updated"."</center>");
}
else
{
    echo("<br>"."<center>"."Click to update"."</center>");
    echo("<br>"."<center>"."Once you update it, it will display previous recodes. Please ignore it."."</center>");
}
$conn->close();
?>
