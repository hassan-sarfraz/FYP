<?php
include './connection.php';
$accountid = $_REQUEST['account_id'];
$query = "delete from customer_account where account_id = $accountid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disca");
}
 else {
    echo mysqli_error($link);    
}
?>