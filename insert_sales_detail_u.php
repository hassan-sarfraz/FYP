<?php
include './connection.php';
$date = $_REQUEST['date'];
$detail = $_REQUEST['detail'];
$qty = $_REQUEST['qty'];
$cusid = $_REQUEST['customer'];
$pid = $_REQUEST['product'];
$modeid = $_REQUEST['mode'];
$tamount=$_REQUEST['tamount'];
$advamount=$_REQUEST['advamount'];
$remaining=$_REQUEST['remaining'];
$query = "insert into sales_detail(date,detail,qty,cus_id,p_id,mode_id) values('$date','$detail','$qty','$cusid','$pid','$modeid')";
if($result = mysqli_query($link, $query))
{

    header("location:main_home_of_user.php?pg=ica&disca&date=$date & cusid=$cusid & modeid=$modeid & tamount=$tamount & advamount=$advamount & ramaining=$remaining");
}
 else {
    echo mysqli_error($link);    
}
?>