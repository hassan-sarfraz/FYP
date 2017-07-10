<?php
include 'connection.php';
$pdid = $_REQUEST['pdid'];
$quantity = $_REQUEST['quantity'];
$date = $_REQUEST['date'];
$detail = $_REQUEST['detail'];
$porderid = $_REQUEST['order'];
$pid = $_REQUEST['product'];

$query = "update purchase_detail set quantity='$quantity', date='$date',detail='$detail',porder_id='$porderid',p_id='$pid' where pd_id='$pdid'";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dispd");
}
 else {
    echo mysqli_error($link);    
}
?>