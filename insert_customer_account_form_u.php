<?php
include './connection.php';
$cusid = $_REQUEST['cusid'];
$modeid = $_REQUEST['modeid'];
$tamount = $_REQUEST['tamount'];
$advamount = $_REQUEST['advamount'];
$remaining = $_REQUEST['ramaining'];
$date = $_REQUEST['date'];
//echo $advamount . $cusid . $modeid . $tamount . $remaining . $date;
//die;
$query="select * from customer where cus_id='$cusid'";
$result= mysqli_query($link, $query);
foreach ($result as $value)
{
    $cusname=$value['cus_name'];
}
?>

<center>
    <h3 style="margin-top: -5px; "><label style="font-size: 21px;" class="label label-info">ADD CUSTOMER ACCOUNT</label></h3><br>
    <form name="insert_customer_account_form_u" method="post" action="insert_customer_account_u.php" style="width: 100%;">
        <table style="width: 60%;background:#ffffff;" class="table table-bordered table-hover table-responsive">
            <tr>
                <td style="width:40%"><label>Customer Name:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="cusname" value="<?php echo $cusname?>"></td>
            </tr>
            <tr>
                <td style="width:40%"><label>TOTAL AMOUNT:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="tamount" value="<?php echo $tamount?>"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>AMOUNT RECEIVED:</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="advamount" value="<?php echo $advamount?>"></td>
            </tr>
            <tr>
                <td  style="width:40%"><label>REMAINING Amount</label></td>
                <td><input class="form-control" style="width: 100%; text-align: center;" type="text" name="remaining" value="<?php echo $remaining?>"></td>
            </tr>
<!--            <tr>
                <td  style="width:40%"><label>CUSTOMER NAME:</label></td>
                <td><select class="form-control" style="width: 100%;" name="cusaccount">
                        <option>---Select Customer's Name---</option>
                        <?php
//                        include 'connection.php';
//                        $query = "select * from customer";
//                        $result = mysqli_query($link, $query);
//                        while ($row = mysqli_fetch_array($result))
//                        {
//                            $cusid = $row['cus_id'];
//                            $cusname = $row['cus_name'];
                            ?>
                            <option value="<?php // echo $cusid; ?>"><?php echo $cusname; ?>
                            </option>
                            <?php
//                        }
                        ?>

                    </select></td>
            </tr> -->
            <tr>
                <td style="border: 0px;"></td>
                <td style="text-align: center; border: 0px;"><input class="btn btn-success" type="submit" name="submit" value="Add customer account" style=" width: 55%"></td>
            </tr>
        </table>
    </form>
</center>