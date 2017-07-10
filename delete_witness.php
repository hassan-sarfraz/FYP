<?php
include './connection.php';
$wid = $_REQUEST['w_id'];
$query = "delete from witness where w_id = $wid";
if($result = mysqli_query($link, $query))
{
    header("location:home.php?pg=diswit");
}
 else {
    echo mysqli_error($link);    
}
?>