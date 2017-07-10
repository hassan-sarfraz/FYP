<?php
include './connection.php';
$modeid = $_REQUEST['modeid'];
$modetitle = $_REQUEST['modetitle'];
$months = $_REQUEST['months'];
$detail = $_REQUEST['detail'];

$query = "update installment_mode set mode_title='$modetitle', months='$months', detail='$detail' where mode_id='$modeid'";
if($result = mysqli_query($link, $query))
{
    header("location:home.php?pg=disim");
}
 else {
    echo mysqli_error($link);    
}
?>