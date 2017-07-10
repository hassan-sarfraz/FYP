<?php
include 'connection.php';
$cusid = $_REQUEST['cus_id'];
$query = "delete from customer where cus_id = $cusid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=discus");
}
 else {
    echo mysqli_error($link);    
}
?>