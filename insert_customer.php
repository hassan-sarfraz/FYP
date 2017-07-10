<?php
include 'connection.php';

$cusname = $_REQUEST['cusname'];
$cusaddress = $_REQUEST['cusaddress'];
$cusmobile = $_REQUEST['cusmobile'];
$cuscnic = $_REQUEST['cuscnic'];
//$cuscode = $_REQUEST['cuscode'];
$query = "insert into customer(cus_name,cus_address,cus_contact,cus_cnic) values('$cusname','$cusaddress','$cusmobile','$cuscnic')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=isd");
}
else
{
    echo mysqli_error($link);
}
?>