<?php
include 'connection.php';
$cusname=$_REQUEST['cusname'];
$tamount = $_REQUEST['tamount'];

$advamount = $_REQUEST['advamount'];
//$detail = $_REQUEST['detail'];
$remaining = $_REQUEST['remaining'];
$query = "insert into customer_account(total_amount,amount_recieved,remaining,cus_name) values('$tamount','$advamount','$remaining','$cusname')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:main_home_of_user.php?pg=disca");
}
 else {
    echo'failed';   
}
?>