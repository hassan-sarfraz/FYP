<?php
include './connection.php';
$wname = $_REQUEST['wname'];
$wprofession = $_REQUEST['wprofession'];
$waddress = $_REQUEST['waddress'];
$wcontact = $_REQUEST['wcontact'];
$wcnic = $_REQUEST['wcnic'];
$cusid = $_REQUEST['customer'];

$query = "insert into witness(w_name,w_profession,w_address,w_contact,w_cnic,cus_id) values('$wname','$wprofession','$waddress','$wcontact','$wcnic','$cusid')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:main_home_of_user.php?pg=diswit");
}
 else {
    echo mysqli_error($link);    
}
?>