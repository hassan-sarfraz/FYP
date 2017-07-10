<?php
include 'connection.php';
$sdid = $_REQUEST['sdid'];

$query = "select * from sales_detail where sd_id=$sdid";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);

$cusid = $row['cus_id'];
$querytest = "select * from customer where cus_id=$cusid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$cusnametest = $rowtest['cus_name'];

$pid = $row['p_id'];
$querytest = "select * from product where p_id=$pid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$pnametest = $rowtest['p_name'];

$modeid = $row['mode_id'];
$querytest = "select * from installment_mode where mode_id=$modeid";
$resulttest = mysqli_query($link, $querytest);
$rowtest = mysqli_fetch_array($resulttest);
$modetitletest = $rowtest['mode_title'];
?>
<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">UPDATE SALE DETAIL</label></h3><br>
<form name="edit_sales_detail_form" method="post" action="edit_sales_detail.php">
    <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
    <input type="hidden" name="sdid" value="<?php echo $row['sd_id'];?>"/>
    <tr>
        <td><label>SALE DATE:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="date" name="date" value="<?php echo $row['date'];?>"/></td>
    </tr>
    <tr>
        <td><label>SALE DETAIL:</label></td>
        <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="detail" value="<?php echo $row['detail'];?>"/></td>
    </tr>
    
    <?php
        $query = "select * from customer";
        $result = mysqli_query($link, $query);
        ?>
    
    <tr>
        <td><label>CUSTOMER NAME:</label></td>
        <td><select class="form-control" style="width: 100%; text-align: center;" name="customer">
        <?php
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
        else
        {
        ?>
        <option value="<?php echo $cusid;?>"><?php echo $cusname;?></option>
        <?php
        }
        }
        ?>
    </select></td>
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
    
    <?php
    $query = "select * from installment_mode";
    $result = mysqli_query($link, $query);
    ?>
    <tr>
        <td><label>MODE TITLE:</label></td>
        <td><select class="form-control" style="width: 100%; text-align: center;" name="mode">
        <?php
    while($row = mysqli_fetch_array($result))
    {
    $modeid = $row['mode_id'];    
    $modetitle = $row['mode_title'];
    if($modetitletest == $modetitle)
    {
    ?>
    <option value="<?php echo $modeid;?>"selected=""><?php echo $modetitle;?></option>    
    <?php
    }
 else {
    ?>
    <option value="<?php echo $modeid;?>"><?php echo $modetitle;?></option>    
    <?php
 }
    }
    ?>
    </select></td>
    </tr>
    <tr>    
        <td style="border: 0px;"></td>
        <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Update sale detail" style=" width: 45%"></td>
    </tr>
    
    </table>
</form>
</center>