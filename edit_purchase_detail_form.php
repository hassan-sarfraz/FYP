<?php
include 'connection.php';
$pdid = $_REQUEST['pdid'];

$query = "select * from purchase_detail where pd_id=$pdid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$porderid = $row['porder_id'];
$querytest = "select * from purchase_order where porder_id=$porderid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$ordernotest = $rowtest['order_no'];

$pid = $row['p_id'];
$querytest = "select * from product where p_id=$pid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$pnametest = $rowtest['p_name'];
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">UPDATE PURCHASE DETAIL</label></h3><br>
<form name="edit_purchase_detail_form" method="post" action="edit_purchase_detail.php">
    <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <input type="hidden" name="pdid" value="<?php echo $row['pd_id'];?>"/>
    <tr>
        <td><label>QUANTITY:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="quantity" value="<?php echo $row['quantity'];?>"/></td>
    </tr>
    <tr>
        <td><label>DATE:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="date" name="date" value="<?php echo $row['date'];?>"/></td>
    </tr>
    <tr>
        <td><label>DETAIL:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="detail" value="<?php echo $row['detail'];?>"/></td>
    </tr>
    
        <?php
        $query = "select * from purchase_order";
        $result = mysqli_query($link, $query);
        ?>
    <tr>
        <td><label>ORDER NO:</label></td>
        <td><select class="form-control" style="width: 100%; text-align: center;" name="order">
        <?php
        while ($row = mysqli_fetch_array($result))
        {
        $porderid = $row['porder_id'];
        $orderno = $row['order_no'];
        if($ordernotest == $orderno)
        {
        ?>
        <option value="<?php echo $porderid;?>"selected=""><?php echo $orderno;?></option>
        <?php
        }
        else
        {
        ?>
        <option value="<?php echo $porderid;?>"><?php echo $orderno;?></option>
        <?php
        }
        }
        ?>
    </select>
    </td>
    </tr>
    
    <?php
    $query = "select * from product";
    $result = mysqli_query($link, $query);
    ?>
    <tr>
        <td><label>PRODUCT NAME:</label></td>
        <td><select class="form-control" style="width: 100%; text-align: center;" name="product">
        <?php
    while($row = mysqli_fetch_array($result))
    {
    $pid = $row['p_id'];    
    $pname = $row['p_name'];
    if($pnametest == $pname)
    {
    ?>
    <option value="<?php echo $pid;?>"selected=""><?php echo $pname;?></option>    
    <?php
    }
 else {
    ?>
    <option value="<?php echo $pid;?>"><?php echo $pname;?></option>    
    <?php
 }
    }
    ?>
    </select></td>
    </tr>
    <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Update purchase detail" style=" width: 48%"></td>
    </tr>
    
    </table>
</form>
</center>