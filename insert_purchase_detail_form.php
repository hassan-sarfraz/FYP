
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">ADD PURCHASE DETAIL</label></h3><br>
    <form name="insert_purchase_detail_form" method="post" action="insert_purchase_detail.php" style="width: 100%;">
        <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <tr>
        <td style="width:40%"><label>QUANTITY:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="quantity" ></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>DATE:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="date" name="date" ></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>DETAIL:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="detail" ></td>
    </tr>
    
    <tr>
        <td  style="width:40%"><label>PRODUCT NAME:</label></td>
        <td><select class="form-control" style="width: 100%" name="product"><br>
        <option>---select product name---</option>
        <?php
        include 'connection.php';
        $query = "select * from product";
        $result = mysqli_query($link, $query);
        while($row = mysqli_fetch_array($result))
        {
        $pid = $row['p_id'];    
        $pname = $row['p_name'];
        ?>
        <option value="<?php echo $pid;?>"><?php echo $pname;?></option>
        <?php
        }
        ?>
    </select></td>
    </tr>
    <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Add purchase detail" style=" width: 45%"></td>
    </tr>
</table>
</form>
    </center>