<?php
session_start();
if(isset($_SESSION['uname']))
{
    header("location:mainhome.php");
    
}
else
{
    header("location:home1.php");
}
?>