<?php
include 'connection.php';

$cusname = $_REQUEST['cusname'];
$cusaddress = $_REQUEST['cusaddress'];
$cusmobile = $_REQUEST['cusmobile'];
$cuscnic = $_REQUEST['cuscnic'];
$cuscode = $_REQUEST['cuscode'];
$query = "insert into customer(cus_name,cus_address,cus_contact,cus_cnic,cus_code) values('$cusname','$cusaddress','$cusmobile','$cuscnic','$cuscode')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:main_home_of_user.php?pg=discus");
}
else
{
    echo mysqli_error($link);
}
?>