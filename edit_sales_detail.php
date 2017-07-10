<?php
include 'connection.php';
$sdid = $_REQUEST['sdid'];
$date = $_REQUEST['date'];
$detail = $_REQUEST['detail'];
$cusid = $_REQUEST['customer'];
$pid = $_REQUEST['product'];
$modeid = $_REQUEST['mode'];

$query = "update sales_detail set date='$date',detail='$detail', cus_id='$cusid',p_id='$pid', mode_id='$modeid' where sd_id='$sdid'";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dissd");
}
 else {
    echo mysqli_error($link);    
}
?>