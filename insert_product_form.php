<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">ADD PRODUCT</label></h3><br>
    <form name="insert_product_form" method="post" action="insert_product.php" enctype="multipart/form-data" style="width: 100%;">
        <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <tr>
            <td style="width:40%"><label>SELECT IMAGE:</label></td>
        <td><input style="width:100%" type="file" name="myfile" class="form-control"/></td>
    </tr>
    <tr>
        <td style="width:40%"><label>PRODUCT NAME:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="pname"></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>PRODUCT PRICE:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="pprice"></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>PRODUCT DETAIL:</label></td>
        <td><textarea style="width: 100%" rows="3"  name="pdetail"></textarea></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>PRODUCT CATEGORY NAME:</label></td>
        <td><select class="form-control" style="width: 100%;" name="pcatname">
        <option>---select product category name---</option>
        <?php
        
        include 'connection.php';
//        include './bootstrap.php';
        $query = "select * from product_category";
        $result = mysqli_query($link, $query);
        while ($row= mysqli_fetch_array($result))
        {
        $pcatid = $row['pcat_id'];
        $pcatname = $row['pcat_name'];
        
        ?>
        <option value="<?php echo $pcatid;?>"><?php echo $pcatname;?></option>
        <?php
        }
        ?>
    </select></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>BRAND NAME:</label></td>
        <td><select class="form-control " style="width: 100%" name="brand">
        <option>---select brand name---</option>
        <?php
        $query = "select * from brand";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
        $brid = $row['br_id'];
        $brname = $row['br_name'];
        
        ?>
        <option value="<?php echo $brid;?>"><?php echo $brname;?></option>
    <?php
        }
    ?>
    </select></td>
    </tr>
        
    <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Add Product" style=" width: 45%;"></td>
    </tr>
</table>
</form>
    </center>