<?php
include './connection.php';
$brid = $_REQUEST['brid'];
$brname = $_REQUEST['brname'];
$brdetail = $_REQUEST['brdetail'];
$query = "update brand set br_name='$brname', br_detail='$brdetail' where br_id='$brid'";
if($result = mysqli_query($link, $query))
{
    header("location:home.php?pg=disbr");
}
else
{
    echo mysqli_error($link);
}
?>