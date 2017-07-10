<?php
include './connection.php';
$spid = $_REQUEST['spid'];
$spname = $_REQUEST['spname'];
$spaddress = $_REQUEST['spaddress'];
$spcontact = $_REQUEST['spcontact'];

$query = "update supplier set sp_name='$spname', sp_address='$spaddress', sp_contact='$spcontact' where sp_id='$spid'";
if($result = mysqli_query($link, $query))
{
    header("location:home.php?pg=dissup");
}
 else {
    echo mysqli_error($link);    
}
?>