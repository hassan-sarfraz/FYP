<?php
include 'connection.php';
$empid = $_REQUEST['emp_id'];
$query = "delete from employee where emp_id=$empid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disemp");
}
 else {
    echo mysqli_error($link);    
}
?>