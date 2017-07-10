<?php
include 'connection.php';
$empname = $_REQUEST['empname'];
$empaddress = $_REQUEST['empaddress'];
$empcontact = $_REQUEST['empcontact'];
$empcnic = $_REQUEST['empcnic'];
$query = "insert into employee(emp_name,emp_address,emp_contact,emp_cnic) values('$empname','$empaddress','$empcontact','$empcnic')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=disemp");
}
 else {
    echo mysqli_error($link);    
}
?>