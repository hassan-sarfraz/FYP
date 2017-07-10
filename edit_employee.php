<?php
include './connection.php';
$empid = $_REQUEST['empid'];
$empname = $_REQUEST['empname'];
$empaddress = $_REQUEST['empaddress'];
$empcontact = $_REQUEST['empcontact'];
$empcnic = $_REQUEST['empcnic'];

$query = "update employee set emp_name='$empname', emp_address='$empaddress', emp_contact='$empcontact',emp_cnic='$empcnic' where emp_id='$empid'";
if($result = mysqli_query($link, $query))
{
    header("location:home.php?pg=disemp");
}
 else {
    echo mysqli_error($link);    
}
?>