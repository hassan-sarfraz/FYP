<?php
include 'connection.php';
$sol = $_REQUEST['s'];

$query = "select * from purchase_order where order_no=$sol";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$pid1 = $row['p_id'];
$querytest = "select * from product where p_id=$pid1";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$pnametest = $rowtest['p_name'];

$spid1 = $row['sp_id'];
$querytest = "select * from supplier where sp_id=$spid1";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$spnametest = $rowtest['sp_name'];
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">UPDATE PURCHASE ORDER</label></h3><br>
<form name="edit_purchase_order_form" method="post" action="edit_purchase_order.php">
    <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <input class="form-control" style="width: 100%; text-align: center;" type="hidden" name="orderno" value="<?php echo $row['order_no'];?>"/><br>
    <tr>
        <td><label>PURCHASE ORDER DATE:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="date" name="date" value="<?php echo $row['date'];?>"/></td>
    </tr>
    
        <?php
        $query = "select * from product";
        $result = mysqli_query($link, $query);
        ?>
    <tr>
        <td><label>PRODUCT NAME:</label></td>
        <td><select class="form-control" style="width: 100%; text-align: center;" name="product">
        <?php
        while ($row = mysqli_fetch_array($result))
        {
        $pid = $row['p_id'];
        $pname = $row['p_name'];
        if($pid == $pid1)
        {
            
        
        ?>
        <option value="<?php echo $pid;?>"selected=""><?php echo $pname;?></option>
        <?php
        }
        else
        {
        ?>
        <option value="<?php echo $pid;?>"><?php echo $pname;?></option>
        <?php
        }
        }
        ?>
    </select></td>
    </tr>
    
    <?php
    $query = "select * from supplier";
    $result = mysqli_query($link, $query);
    ?>
    <tr>
        <td><label>SUPPLIER NAME:</label></td>
        <td><select class="form-control" style="width: 100%; text-align: center;" name="supplier">
        <?php
    while($row = mysqli_fetch_array($result))
    {
    $spid = $row['sp_id'];    
    $spname = $row['sp_name'];
    if($spid == $spid1)
    {
    ?>
    <option value="<?php echo $spid;?>"selected=""><?php echo $spname;?></option>    
    <?php
    }
 else {
    ?>
    <option value="<?php echo $spid;?>"><?php echo $spname;?></option>    
    <?php
 }
    }
    ?>
    </select></td>
    </tr>
    <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Update purchase order" style=" width: 57%"></td>
    </tr>
    
    </table>
</form>
</center>