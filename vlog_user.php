<?php
session_start();
$name = $_REQUEST['name'];
$pass = $_REQUEST['pass'];
include './connection.php';
$query = "select * from user";
$result = mysqli_query($link, $query);
foreach ($result as $value)
{
    if($value['u_name']==$name && $value['u_pass']==$pass)
    {
        $_SESSION['name'] = $value['u_name'];
        header("location:index_user.php");
    }
}
header("location:index_user.php");       
?>