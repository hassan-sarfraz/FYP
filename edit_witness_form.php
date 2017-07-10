<?php
include './connection.php';
$sol = $_REQUEST['s'];

$query = "select * from witness where w_id = $sol";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$cusid = $row['cus_id'];
$querytest = "select * from customer where cus_id = $cusid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$cusnametest = $rowtest['cus_name'];
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-success">Update Witness</label></h3><br>
<form name="edit_witness_form"  action="edit_witness.php">
    <input type="hidden" name="wid" value="<?php echo $row['w_id'];?>"/>
    <label>Witness Name:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="wname" value="<?php echo $row['w_name'];?>"/><br>
    <label>Witness Profession:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="wprofession" value="<?php echo $row['w_profession'];?>"><br>
    <label>Witness Address:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="waddress" value="<?php echo $row['w_address'];?>"><br>
    <label>Witness Mobile No:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="wcontact" value="<?php echo $row['w_contact'];?>"><br>
    <label>Witness CNIC:</label><input class="form-control" style="width: 30%; text-align: center;" type="text" name="wcnic" value="<?php echo $row['w_cnic'];?>"><br>
    <label>Customer Name:</label><select class="form-control" style="width: 30%; text-align: center;" name="customer"><br>
        
        <?php
        include './connection.php';
        $query = "select * from customer";
        $result = mysqli_query($link, $query);
        while ($row = mysqli_fetch_array($result))
        {
        $cusid = $row['cus_id'];    
        $cusname = $row['cus_name'];
        if($cusnametest == $cusname)
        {
        ?>
        <option value="<?php echo $cusid;?>"selected=""><?php echo $cusname;?></option>
        <?php
        }
 else {
     ?>
 
            <option value="<?php echo $cusid;?>"><?php echo $cusname;?></option>
 <?php
 }
        }
        ?>
    </select><br>
    
    <input class="btn btn-success" type="submit" name="submit" value="Update">
</form></center>