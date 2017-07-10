<?php
include 'connection.php';
$pcatname = $_REQUEST['pcatname'];
$query = "insert into product_category(pcat_name) values('$pcatname')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dispc");
    
}
else
{
    echo mysqli_error($link);
}
?>