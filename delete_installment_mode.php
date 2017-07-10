<?php
include 'connection.php';
$modeid = $_REQUEST['mode_id'];
$query = "delete from installment_mode where mode_id=$modeid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disim");
}
 else {
    echo mysqli_error($link);    
}
?>