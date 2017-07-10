<?php
include 'connection.php';
$orderno = $_REQUEST['order_no'];
$query = "delete from purchase_order where order_no= $orderno";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dispo");
}
else
{
    echo mysqli_error($link);
}
?>