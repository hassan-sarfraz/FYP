<?php
include 'connection.php';

$brname = $_REQUEST['brname'];
$brdetail = $_REQUEST['brdetail'];
$query = "insert into brand(br_name,br_detail) values('$brname','$brdetail')";
$result = mysqli_query($link, $query);
if ($result)
{
    header("location:home.php?pg=disbr");
}
else
{
    echo mysqli_error($link);
}
?>