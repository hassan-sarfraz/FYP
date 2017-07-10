<?php
include './connection.php';
$reminst=$_REQUEST['reminst'];
$reminst=$reminst-1;
$accountid = $_REQUEST['accountid'];
$cusname = $_REQUEST['cusname'];
$tamount = $_REQUEST['tamount'];
$advamount = $_REQUEST['advamount'];
$remaining = $_REQUEST['remaining'];
//$cusid = $_REQUEST['customer'];

$query = "update customer_account set cus_name='$cusname', total_amount='$tamount', amount_recieved='$advamount', remaining='$remaining', rem_inst='$reminst' where account_id = '$accountid'";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disca");
}
 else {
    echo mysqli_error($link);    
}
?>