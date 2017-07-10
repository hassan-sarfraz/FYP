<?php
include 'connection.php';
$quantity = $_REQUEST['quantity'];
$date = $_REQUEST['date'];
$detail = $_REQUEST['detail'];
$porderid = $_REQUEST['orderno'];
$pid = $_REQUEST['product'];

$query = "insert into purchase_detail(quantity,date,detail,order_no,p_id) values('$quantity','$date','$detail','$porderid','$pid')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:main_home_of_user.php?pg=dispd");
}
 else {
    echo mysqli_error($link);    
}
?>