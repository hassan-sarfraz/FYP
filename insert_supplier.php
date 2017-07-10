<?php
include 'connection.php';
$spname = $_REQUEST['spname'];
$spaddress = $_REQUEST['spaddress'];
$spcontact = $_REQUEST['spcontact'];
$query = "insert into supplier(sp_name,sp_address,sp_contact) values('$spname','$spaddress','$spcontact')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:home.php?pg=dissup");
}
 else {
    echo mysqli_error($link);    
}
?>