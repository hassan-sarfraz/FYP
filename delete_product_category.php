<?php
include 'connection.php';
$pcatid = $_REQUEST['pcat_id'];
$query = "delete from product_category where pcat_id=$pcatid";
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