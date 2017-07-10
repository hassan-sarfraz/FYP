<?php
session_start();
if (isset ($_SESSION['name'])) {
    header("location:userhome.php");
}
else
{
    header("location:create_an_account.html");
}
?>