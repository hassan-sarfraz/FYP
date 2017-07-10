<?php
include './connection.php';
$pcatid = $_REQUEST['pcatid'];
$query = "select * from product_category where pcat_id=$pcatid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">UPDATE PRODUCT CATEGORY</label></h3><br>
<form name="edit_product_category_form" method="post" action="edit_product_category.php">
    <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <input type="hidden" name="pcatid" value="<?php echo $row['pcat_id'];?>"/>
    <tr>
        <td><label>PRODUCT CATEGORY NAME:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="pcatname" value="<?php echo $row['pcat_name'];?>"/></td>
    </tr>
    <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Update product category" style=" width: 63%"></td>
    </tr>
    
    </table>
</form>
</center>