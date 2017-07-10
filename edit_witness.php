<?php
include 'connection.php';
$wid = $_REQUEST['wid'];
$wname = $_REQUEST['wname'];
$wprofession = $_REQUEST['wprofession'];
$waddress = $_REQUEST['waddress'];
$wcontact = $_REQUEST['wcontact'];
$wcnic = $_REQUEST['wcnic'];
$cusid = $_REQUEST['customer'];

$query = "update witness set w_name='$wname', w_profession='$wprofession', w_address='$waddress', w_contact='$wcontact', w_cnic='$wcnic', cus_id='$cusid' where w_id=$wid";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=diswit");
}
 else {
    echo mysqli_error($link);    
}
?>