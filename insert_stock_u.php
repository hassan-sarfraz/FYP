<?php
include 'connection.php';
$quantity = $_REQUEST['quan'];
$price = $_REQUEST['pri'];
$detail = $_REQUEST['det'];
$pid = $_REQUEST['product'];

$query = "insert into stock(quantity,price,detail,p_id) values('$quantity','$price','$detail','$pid')";
$result = mysqli_query($link, $query);
if($result)
{
    header("location:main_home_of_user.php?pg=disst");

}
 else {
    echo mysqli_error($link);    
}
?>