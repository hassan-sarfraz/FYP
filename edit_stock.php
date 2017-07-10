<?php
include 'connection.php';
$stkid = $_REQUEST['stkid'];
$quantity = $_REQUEST['quantity'];
$price = $_REQUEST['price'];
$detail = $_REQUEST['detail'];
$pid = $_REQUEST['product'];

$query = "update stock set quantity='$quantity',price='$price', detail='$detail',p_id='$pid' where stk_id='$stkid'";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disst");
}
 else {
    echo mysqli_error($link);    
}
?>