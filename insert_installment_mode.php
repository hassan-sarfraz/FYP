<?php
include 'connection.php';
$mtitle = $_REQUEST['mtitle'];
$months = $_REQUEST['months'];
$detail = $_REQUEST['detail'];
$query = "insert into installment_mode(mode_title,months,detail) values('$mtitle','$months','$detail')";
$result = mysqli_query($link, $query);
if($result){
    header("location:home.php?pg=disim");
}
else
{
    echo mysqli_error($link);
}
?>