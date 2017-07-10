<?php

include './connection.php';
$date = $_REQUEST['date'];
//$pminstallment = $_REQUEST['pminstallment'];
$qty = $_REQUEST['qty'];
$cusid = $_REQUEST['customer'];
$pid = $_REQUEST['product'];
$modeid = $_REQUEST['mode'];
$tamount = $_REQUEST['tamount'];
$tamountwm = $_REQUEST['tamountwm'];
$advamount = $_REQUEST['advamount'];
$remaining = $_REQUEST['remaining'];
$querystockminus = "select * from stock where p_id=$pid";
$resultstockminus = mysqli_query($link, $querystockminus);
foreach ($resultstockminus as $valuestockminus)
{
    $qtystock = $valuestockminus['quantity'];
}
$qtystock = $qtystock - $qty;
$queryupdatestock = "update stock set quantity='$qtystock' where p_id='$pid'";
$resultupdatestock = mysqli_query($link, $queryupdatestock);
$query = "insert into sales_detail(date,qty,cus_id,p_id,mode_id) values('$date','$qty','$cusid','$pid','$modeid')";
//$tamountwm = filter_var($tamountwm, FILTER_SANITIZE_NUMBER_INT);
//$advamount = filter_var($advamount, FILTER_SANITIZE_NUMBER_INT);
//$remaining = filter_var($remaining, FILTER_SANITIZE_NUMBER_INT);


if ($result = mysqli_query($link, $query))
{

    header("location:home.php?pg=ica&disca&date=$date & cusid=$cusid & modeid=$modeid & tamountwm=$tamountwm & advamount=$advamount & ramaining=$remaining");
}
else
{
    echo mysqli_error($link);
}
?>