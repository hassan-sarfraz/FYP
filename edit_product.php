<?php
include "connection.php";
$pid = $_REQUEST['pid'];
$pname = $_REQUEST['pname'];
$pprice = $_REQUEST['pprice'];
$pdetail = $_REQUEST['pdetail'];
$pcatid = $_REQUEST['procategory'];
$brid = $_REQUEST['brand'];

$query = "update product set p_name='$pname', p_price='$pprice', p_detail='$pdetail', pcat_id='$pcatid', br_id='$brid' where p_id='$pid'";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dispro");
}
 else {
    echo mysqli_error($link);    
}
?>