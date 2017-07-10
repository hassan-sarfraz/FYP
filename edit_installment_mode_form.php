<?php
include './connection.php';
$modeid = $_REQUEST['modeid'];
$query = "select * from installment_mode where mode_id=$modeid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">UPDATE INSTALLMENT MODE</label></h3><br>
<form name="edit_installment_mode_form" method="post" action="edit_installment_mode.php">
    <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <input type="hidden" name="modeid" value="<?php echo $row['mode_id'];?>"/>
    <tr>
        <td><label>MODE TITLE:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="modetitle" value="<?php echo $row['mode_title'];?>"/></td>
    </tr>
    <tr>
        <td><label>MONTHS:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="months" value="<?php echo $row['months'];?>"/></td>
    </tr>
    <tr>
        <td><label>DETAIL:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="detail" value="<?php echo $row['detail'];?>"/></td>
    </tr>
    <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Update installment mode" style=" width: 47%"></td>
    </tr>
    
    
    </table>
</form>
</center>