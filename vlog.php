<?php
session_start();
$uuname = $_REQUEST['uname'];
$uupass = $_REQUEST['upass'];
include './connection.php';
$query = "select * from admin";
$result = mysqli_query($link, $query);
foreach ($result as $value)
{
    if($value['u_name']==$uuname && $value['u_pass']==$uupass)
    {
        $_SESSION['uname'] = $value['u_name'];
        header("location:index.php");
    }
}
header("location:index.php")
?>