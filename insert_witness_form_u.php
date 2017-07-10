

<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">ADD WITNESS</label></h3><br>
    <form name="insert_witness_form_u" method="post" action="insert_witness_u.php" style="width: 100%;">
        <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <tr>
        <td style="width:40%"><label>WITNESS NAME:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="wname"></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>WITNESS PROFESSION:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="wprofession"></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>WITNESS ADDRESS:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="waddress"></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>WITNESS MOBILE NO:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="wcontact"></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>WITNESS CNIC:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="wcnic"></td>
    </tr>
    <tr>
        <td  style="width:40%"><label>CUSTOMER NAME:</label></td>
        <td><select class="form-control" style="width: 100%; text-align: center;" name="customer"><br>
                <option>---select customer's name---</option>
        <?php
        include './connection.php';
        $query = "select * from customer";
        $result = mysqli_query($link, $query);
        while ($row = mysqli_fetch_array($result))
        {
        $cusid = $row['cus_id'];    
        $cusname = $row['cus_name'];
        ?>
        <option value="<?php echo $cusid;?>"><?php echo $cusname;?></option>
        <?php
        }
        ?>
    </select></td>
    </tr>
    <tr>
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="ADD WITNESS" style=" width: 45%;"></td>
    </tr>
</table>
</form>
    </center>