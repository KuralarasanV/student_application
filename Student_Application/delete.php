<?php

$connection = mysqli_connect("localhost","Kuralarasan","123456789");

$db = mysqli_select_db($connection,"kural");
$delete = $_GET['del'];


$sql = "delete from student_details where id = '$delete'";


if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("index.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

?>