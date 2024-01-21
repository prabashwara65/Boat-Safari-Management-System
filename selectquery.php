<?php
    require_once('code.php');

    $query = "SELECT * FROM feedback";

    $result_set = mysqli_query($connection,$query);

    if($result_set)
    {
        //echo mysqli_num_rows($result_set) . "Records found";

        $table = '<table>';
        $table .= '<tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Phone number</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Feedback</th>
                    <th>Update</th>
                    <th>Delete</th></tr>';
        
        while($record = mysqli_fetch_assoc($result_set))
        {
            $table .= '<tr>';
            $table .= '<td>' . $record['id'] . '</td>';
            $table .= '<td>' . $record['Full_name'] . '</td>';
            $table .= '<td>' . $record['Phone_number'] . '</td>';
            $table .= '<td>' . $record['Email'] . '</td>';
            $table .= '<td>' . $record['Gender'] . '</td>';
            $table .= '<td>' . $record['Feedback'] . '</td>'; 
            $table .= '<td><a href="feedback_update_page.php?id=' . $record['id'] . '" class="btn_up">Update</a></td>';
            $table .= '<td><a href="feedback_del_page.php?id=' . $record['id'] . '" class="btn_del">Delete</a></td>';
            $table .= '</tr>';

        }
        $table .= '</table>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Feedback</title>
    <link rel="stylesheet" href="css/selectquerycss.css">
</head>
<body>
    <h1>View feedback</h1><br>
    <?php echo $table; ?> 
</body>
</html>
