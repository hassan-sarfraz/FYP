<?php
include 'connection.php';
$stkid = $_REQUEST['stkid'];

$query = "select * from stock where stk_id=$stkid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$pid = $row['p_id'];
$querytest = "select * from product where p_id=$pid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$pnametest = $rowtest['p_name'];

?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-success">Update Stock</label></h3><br>
<form name="edit_stock_form" method="post" action="edit_stock.php">
    <input type="hidden" name="stkid" value="<?php echo $row['stk_id'];?>"/>
    <label>Quantity:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="quantity" value="<?php echo $row['quantity'];?>"/><br>
    <label>Price:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="price" value="<?php echo $row['price'];?>"/><br>
    <label>Detail:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="detail" value="<?php echo $row['detail'];?>"/><br>
    
    <?php
    $query = "select * from product";
    $result = mysqli_query($link, $query);
    ?>
    <label>Product Name:</label><select class="form-control" style="width: 30%; text-align: center;" name="product">
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
    </select><br>
    
    <input class="btn btn-success" type="submit" name="submit" value="Update">
</form></center>