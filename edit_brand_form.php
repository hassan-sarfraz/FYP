<?php
include './connection.php';
$brid = $_REQUEST['brid'];
$query = "select * from brand where br_id=$brid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">UPDATE BRAND</label></h3><br>
<form name="edit_brand_form" method="post" action="edit_brand.php">
    <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <input type="hidden" name="brid" value="<?php echo $row['br_id'];?>"/>
    <tr>
        <td><label>BRAND NAME:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="brname" value="<?php echo $row['br_name'];?>"/></td>
    </tr>
    <tr>
        <td><label>BRAND DETAIL:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="brdetail" value="<?php echo $row['br_detail'];?>"/></td>
    </tr>
    <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Update brand" style=" width: 45%"></td>
    </tr>
    
    
    </table>
</form>
</center>