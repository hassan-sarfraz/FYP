<?php
include './connection.php';
$pdid = $_REQUEST['pd_id'];
$query = "delete from purchase_detail where pd_id = $pdid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dispd");
}
 else {
    echo mysqli_error($link);    
}
?>