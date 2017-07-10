<?php
include 'connection.php';
$spid = $_REQUEST['sp_id'];
$query = "delete from supplier where sp_id=$spid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dissup");
}
 else {
    echo mysqli_error($link);    
}
?>