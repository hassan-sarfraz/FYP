<?php
include 'connection.php';
$pid = $_REQUEST['p_id'];
$query = "delete from product where p_id=$pid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dispro");
}
else
{
    echo mysqli_error($link);
}
?>