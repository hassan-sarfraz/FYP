<?php
include 'connection.php';
$quantity = $_REQUEST['quantity'];
$date = $_REQUEST['date'];
$detail = $_REQUEST['detail'];
//$porderid = $_REQUEST['orderno'];
$pid = $_REQUEST['product'];
$querystockplus="select * from stock where p_id='$pid'";
$resultstockplus= mysqli_query($link, $querystockplus);
foreach ($resultstockplus as $valuestockplus)
{
    $quantitystock=$valuestockplus['quantity'];
}
$quantitystock=$quantitystock+$quantity;
$querystockupdate="update stock set quantity='$quantitystock' where p_id='$pid'";
$resultstockupdate= mysqli_query($link, $querystockupdate);

$query = "insert into purchase_detail(quantity,date,detail,p_id) values('$quantity','$date','$detail','$pid')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dispd");
}
 else {
    echo mysqli_error($link);    
}
?>