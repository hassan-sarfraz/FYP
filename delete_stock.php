<?php
include './connection.php';
$stkid = $_REQUEST['stk_id'];
$query = "delete from stock where stk_id = $stkid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disst");
}
 else {
    echo mysqli_error($link);    
}
?>