<?php
include './connection.php';
$cusid = $_REQUEST['cusid'];
$cusname = $_REQUEST['cusname'];
$cusaddress = $_REQUEST['cusaddress'];
$cuscontact = $_REQUEST['cuscontact'];
$cuscnic = $_REQUEST['cuscnic'];
$cuscode = $_REQUEST['cuscode'];
$query = "update customer set cus_name='$cusname', cus_address='$cusaddress', cus_contact='$cuscontact', cus_cnic='$cuscnic', cus_code='$cuscode' where cus_id='$cusid'";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=discus");
    
}
 else {
    echo mysqli_error($link);    
}
?>