<?php
include './connection.php';
$cusid = $_REQUEST['cusid'];
$query = "select * from customer where cus_id = $cusid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">UPDATE CUSTOMER</label></h3><br>
<form name="edit_customer_form" method="post" action="edit_customer.php">
    <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <input type="hidden" name="cusid" value="<?php echo $row['cus_id'];?>"/>
    <tr>
        <td><label>CUSTOMER NAME:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="cusname" value="<?php echo $row['cus_name'];?>"/></td>
    </tr>
    <tr>
        <td><label>CUSTOMER ADDRESS:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="cusaddress" value="<?php echo $row['cus_address'];?>"/></td>
    </tr>
    <tr>
        <td><label>CUSTOMER MOBILE NO:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="cuscontact" value="<?php echo $row['cus_contact'];?>"/></td>
    </tr>
    <tr>
        <td><label>CUSTOMER CNIC:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="cuscnic" value="<?php echo $row['cus_cnic'];?>"/></td>
    </tr>
    <tr>
        <td><label>CUSTOMER CODE:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="cuscode" value="<?php echo $row['cus_code'];?>"/></td>
    </tr>
    <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Update customer" style=" width: 45%"></td>
    </tr>
    
    </table>
</form>
    </center>