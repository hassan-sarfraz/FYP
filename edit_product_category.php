<?php
include './connection.php';
$pcatid = $_REQUEST['pcatid'];
$pcatname = $_REQUEST['pcatname'];
$query = "update product_category set pcat_name='$pcatname' where pcat_id='$pcatid'";
if($result = mysqli_query($link, $query))
{
    header("location:home.php?pg=dispc");
}
 else {
    echo mysqli_error($link);    
}
?>