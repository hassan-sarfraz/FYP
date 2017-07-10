<?php
include 'connection.php';
$orderno = $_REQUEST['order'];
$date = $_REQUEST['date'];
$pid = $_REQUEST['product'];
$spid = $_REQUEST['supplier'];

$query = "insert into purchase_order(order_no,date,p_id,sp_id) values('$orderno','$date','$pid','$spid')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dispo");
}
 else {
    echo mysqli_error($link);    
}
?>