<?php
include 'connection.php';
$reminst=$_REQUEST['reminst'];
$cusname=$_REQUEST['cusname'];
$tamount = $_REQUEST['tamount'];
$date=$_REQUEST['date'];
$advamount = $_REQUEST['advamount'];
$pminstallment = $_REQUEST['pminstallment'];
$remaining = $_REQUEST['remaining'];
$query = "insert into customer_account(pminstallment, strt_date,total_amount,amount_recieved,remaining,cus_name, rem_inst) values('$pminstallment', '$date', '$tamount','$advamount','$remaining','$cusname', '$reminst')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disca");
}
 else {
    echo mysqli_error($link);   
}
?>