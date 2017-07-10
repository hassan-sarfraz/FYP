<?php
include 'connection.php';
$orderno = $_REQUEST['orderno'];
$date = $_REQUEST['date'];
$pid = $_REQUEST['product'];
$spid = $_REQUEST['supplier'];

$query = "update purchase_order set date='$date', p_id='$pid',sp_id='$spid' where order_no='$orderno'";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dispo");
}
 else {
    echo mysqli_error($link);    
}
?>