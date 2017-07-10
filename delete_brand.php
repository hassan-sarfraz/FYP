<?php
include 'connection.php';
$brid = $_REQUEST['br_id'];
$query = "delete from brand where br_id = $brid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disbr");
}
else
{
    echo mysqli_error($link);
}
?>