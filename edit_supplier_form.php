<?php
include './connection.php';
$spid = $_REQUEST['spid'];
$query = "select * from supplier where sp_id=$spid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-success">Update Supplier</label></h3><br>
<form name="edit_stock_form" method="post" action="edit_stock.php">
    <input type="hidden" name="spid" value="<?php echo $row['sp_id'];?>"/>
    <label>Supplier Name:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="spname" value="<?php echo $row['sp_name'];?>"/><br>
    <label>Supplier Address:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="spaddress" value="<?php echo $row['sp_address'];?>"/><br>
    <label>Supplier Mobile No:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="spcontact" value="<?php echo $row['sp_contact'];?>"/><br>
    <input class="btn btn-success" type="submit" name="submit" value="Update">
</form></center>