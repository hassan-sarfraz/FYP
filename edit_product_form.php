<?php
include 'connection.php';
$sol = $_REQUEST['s'];

$query = "select * from product where p_id = ".$sol;
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$pcatid = $row['pcat_id'];
$querytest = "select * from product_category where pcat_id =$pcatid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$pcatnametest = $rowtest['pcat_name'];

$brid = $row['br_id'];
$querytest = "select * from brand where br_id=$brid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$brnametest = $rowtest['br_name'];
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">UPDATE PRODUCT</label></h3><br>
<form name="edit_product_form" method="post" action="edit_product.php">
    <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <input type="hidden" name="pid" value="<?php echo $row['p_id'];?>"/>
    <tr>
        <td><label>PRODUCT NAME:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="pname" value="<?php echo $row['p_name'];?>"/></td>
    </tr>
    <tr>
        <td><label>PRODUCT PRICE:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="pprice" value="<?php echo $row['p_price'];?>"/></td>
    </tr>
    <tr>
        <td><label>PRODUCT DETAIL:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="pdetail" value="<?php echo $row['p_detail'];?>"/></td>
    </tr>
    
    <?php
    $query = "select * from product_category";
    $result = mysqli_query($link, $query);
    ?>
    <tr>
        <td><label>PRODUCT CATEGORY NAME:</label></td>
        <td><select class="form-control" style="width: 100%; text-align: center;" name="procategory">
        <?php
        while ($row= mysqli_fetch_array($result))
        {
            $pcatid = $row['pcat_id'];
            $pcatname = $row['pcat_name'];
            if($pcatnametest == $pcatname)
            {
                ?>
        <option value="<?php echo $pcatid;?>"selected=""><?php echo $pcatname;?></option>
        <?php
            }
 else {
     ?>
        <option value="<?php echo $pcatid;?>"><?php echo $pcatname;?></option>
        <?php
 }
        }
        ?>
    </select></td>
    </tr>
    
    <?php
    $query = "select * from brand";
    $result = mysqli_query($link, $query);
    ?>
    <tr>
        <td> <label>BRAND NAME:</label></td>
        <td><select class="form-control" style="width: 100%; text-align: center;" name="brand">
        <?php
        while ($row= mysqli_fetch_array($result))
        {
            $brid = $row['br_id'];
            $brname = $row['br_name'];
            if($brnametest == $brname)
            {
                ?>
        <option value="<?php echo $brid;?>"selected=""><?php echo $brname;?></option>
        <?php
            }
            else
            {
                ?>
        <option value="<?php echo $brid;?>"><?php echo $brname;?></option>
        <?php
            }
        }
        ?>
    </select></td>
    </tr>
    <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Update product" style=" width: 45%"></td>
    </tr>
    
    </table>
</form>
</center>