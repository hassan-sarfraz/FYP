<?php
include './connection.php';
$sdid = $_REQUEST['sd_id'];
$query = "delete from sales_detail where sd_id = $sdid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dissd");
}
 else {
    echo mysqli_error($link);    
}
?>